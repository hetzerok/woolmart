<?php
$wm = $modx->getService('woolmart', 'WoolMart', $modx->getOption('woolmart.core_path', null, $modx->getOption('core_path') . 'components/woolmart/') . 'model/woolmart/', $scriptProperties);
if (!($wm instanceof WoolMart))
    return '';

//Template properties
$tpl = !empty($tpl) ? $tpl : 'WoolProductsRowTpl';
$cattpl = !empty($cattpl) ? $cattpl : 'WoolProductsCatTpl';
$prefix = !empty($prefix) ? $prefix : 'wool.';

//WHERE properties
$where = !empty($where) ? $modx->fromJSON($where) : array();
$unique = !empty($unique) ? true : false;
$grouByParents = !empty($grouByParents) ? true : false;
$showUnpublished = !empty($showUnpublished) ? true : false;
$showDeleted = !empty($showDeleted) ? true : false;
$showHidden = !empty($showHidden) ? true : false;
$showZeroPrice = !empty($showZeroPrice) ? true : false;
$context = !empty($context) ? $context : $modx->context->get('key');

//Selection properties
$parents = (!empty($parents) || $parents === '0') ? explode(',', $parents) : array($modx->resource->get('id'));
$depth = !empty($depth) ? (integer) $depth : 10;
$sortby = !empty($sortby) ? $sorby : 'id';
$sortdir = !empty($sortdir) ? $sortdir : 'ASC';
$limit = !empty($limit) ? (integer) $limit : 10;
$offset = !empty($offset) ? (integer) $offset : 0;
$includeCounts = !empty($includeCounts) ? true : false;
$includeOptions = !empty($includeOptions) ? true : false;

//Flags
$dbCacheFlag = !isset($dbCacheFlag) ? false : $dbCacheFlag;
if (is_string($dbCacheFlag) || is_numeric($dbCacheFlag)) {
    if ($dbCacheFlag == '0') {
        $dbCacheFlag = false;
    } elseif ($dbCacheFlag == '1') {
        $dbCacheFlag = true;
    } else {
        $dbCacheFlag = (integer) $dbCacheFlag;
    }
}

//True parents for context
$pcQuery = $modx->newQuery('modResource', array('id:IN' => $parents, 'context_key:=' => $context), $dbCacheFlag);
$pcQuery->select(array('id'));
if ($pcQuery->prepare() && $pcQuery->stmt->execute()) {
    foreach ($pcQuery->stmt->fetchAll(PDO::FETCH_ASSOC) as $pcRow) {
        $trueparents[] = $pcRow['id'];
    }
}

//Full map of parents
foreach ($trueparents as $parent) {
    $ch = $modx->getChildIds($parent, $depth, array('context' => $context));
    $children = array_merge((array) $children, $ch);
}
$parents = array_merge($trueparents, $children);

//Query
$query = $modx->newQuery('WoolProducts');
$query->select($modx->getSelectColumns('WoolProducts', 'WoolProducts', $prefix, array('id', 'pagetitle', 'introtext')));
$query->innerJoin('WoolCatProducts', 'WoolCatProducts', 'WoolProducts.id = WoolCatProducts.productid');
$query->select($modx->getSelectColumns('WoolCatProducts', 'WoolCatProducts', $prefix, array('productid', 'catid')));
if (!empty($includeCounts)) {
    $pcQuery = $modx->newQuery('WoolStores', '', $dbCacheFlag);
    $pcQuery->select(array('id'));
    if ($pcQuery->prepare() && $pcQuery->stmt->execute()) {
        foreach ($pcQuery->stmt->fetchAll(PDO::FETCH_ASSOC) as $pcRow) {
            $query->innerJoin('WoolProductQuantity', 'WPQ' . $pcRow['id'], 'WoolProducts.id = WPQ' . $pcRow['id'] . '.productid AND WPQ' . $pcRow['id'] . '.storeid = ' . $pcRow['id']);
            $query->select($modx->getSelectColumns('WoolProductQuantity', 'WPQ' . $pcRow['id'], $prefix . $pcRow['id'] . '.', array('quantity')));
        }
    }
}

//WHERE
$criteria = array('WoolCatProducts.catid:IN' => $parents);

if (empty($showDeleted)) {
    $criteria['WoolProducts.deleted'] = '0';
}
if (empty($showUnpublished)) {
    $criteria['WoolProducts.published'] = '1';
}
if (empty($showHidden)) {
    $criteria['WoolProducts.hidemenu'] = '0';
}
if (empty($showZeroPrice)) {
    $criteria['WoolProducts.price:>'] = '0';
}
$query->where($criteria);

//Grouping
if (!empty($unique)) {
    $query->groupBy('WoolProducts.id');
}

//Sorting
//Можно доделать под сортировку в любом направлении по любому параметру категории
if (!empty($grouByParents)) {
    $query->sortby('WoolCatProducts.catid', ASC);
}
if (!empty($sortby)) {
    if (strpos($sortby, '{') === 0) {
        $sorts = $modx->fromJSON($sortby);
    } else {
        $sorts = array($sortby => $sortdir);
    }
    if (is_array($sorts)) {
        foreach ($sorts as $sort => $dir) {
            $query->sortby($sort, $dir);
        }
    }
}

//Limit
if (!empty($limit))
    $query->limit($limit, $offset);

//Additional variables
$totalcount = $modx->getCount('WoolProducts', $query);

$query->prepare();
echo $query->toSQL();
if ($query->prepare() && $query->stmt->execute()) {
    $tplchunk = $modx->getParser()->getElement('modChunk', $tpl);
    $tplchunk->setCacheable(false);
    $catchunk = $modx->getParser()->getElement('modChunk', $cattpl);
    $catchunk->setCacheable(false);
    if (!empty($grouByParents)) {
        foreach ($query->stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
            $groupout[$row[$prefix . 'catid']][$prefix . 'groupid'] = $row[$prefix . 'catid'];
            $groupout[$row[$prefix . 'catid']][$prefix . 'productblock'] .= $tplchunk->process($row);
            $tplchunk->_processed = false;
            $groupout[$row[$prefix . 'catid']][$prefix . 'productcount']++;
        }
        foreach ($groupout as $group) {
            $output .= $catchunk->process($group);
            $catchunk->_processed = false;
        }
    } else {
        foreach ($query->stmt->fetchAll(PDO::FETCH_ASSOC) as $row) {
            $output .= $tplchunk->process($row);
        }
    }
}

return $output;