<?php
$wm = $modx->getService('woolmart', 'WoolMart', $modx->getOption('woolmart.core_path', null, $modx->getOption('core_path') . 'components/woolmart/') . 'model/woolmart/', $scriptProperties);
if (!($wm instanceof WoolMart))
    return '';

//Template properties
$tpl = $modx->getOption('tpl', $scriptProperties, 'WoolProductsRowTpl');
$prefix = $modx->getOption('prefix', $scriptProperties, 'wool.');

//Selection properties
$parents = (!empty($parents) || $parents === '0') ? explode(',', $parents) : array($modx->resource->get('id'));
array_walk($parents, 'trim');
$parents = array_unique($parents);
$depth = isset($depth) ? (integer) $depth : 10;
$sortby = isset($sortby) ? $sorby : 'id';
$sortdir = isset($sortdir) ? $sortdir : 'ASC';
$limit = isset($limit) ? (integer) $limit : 10;
$offset = isset($offset) ? (integer) $offset : 0;

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

//Context
$contextArray = array();
$contextSpecified = false;
if (!empty($context)) {
    $contextArray = explode(',',$context);
    array_walk($contextArray, 'trim');
    $contexts = array();
    foreach ($contextArray as $ctx) {
        $contexts[] = $modx->quote($ctx);
    }
    $context = implode(',',$contexts);
    $contextSpecified = true;
    unset($contexts,$ctx);
} else {
    $context = $modx->quote($modx->context->get('key'));
}

//Map of parent => context_key
$pcMap = array();
$pcQuery = $modx->newQuery('modResource', array('id:IN' => $parents), $dbCacheFlag);
$pcQuery->select(array('id', 'context_key'));
if ($pcQuery->prepare() && $pcQuery->stmt->execute()) {
    foreach ($pcQuery->stmt->fetchAll(PDO::FETCH_ASSOC) as $pcRow) {
        $pcMap[(integer) $pcRow['id']] = $pcRow['context_key'];
    }
}
var_dump($pcMap);

//Full map of parents
$children = array();
$parentArray = array();
foreach ($parents as $parent) {
    if ($parent === 0) {
        $pchildren = array();
        if ($contextSpecified) {
            foreach ($contextArray as $pCtx) {
                if (!in_array($pCtx, $contextArray)) {
                    continue;
                }
                $options = $pCtx !== $modx->context->get('key') ? array('context' => $pCtx) : array();
                $pcchildren = $modx->getChildIds($parent, $depth, $options);
                if (!empty($pcchildren))
                    $pchildren = array_merge($pchildren, $pcchildren);
            }
        } else {
            $cQuery = $modx->newQuery('modContext', array('key:!=' => 'mgr'));
            $cQuery->select(array('key'));
            if ($cQuery->prepare() && $cQuery->stmt->execute()) {
                foreach ($cQuery->stmt->fetchAll(PDO::FETCH_COLUMN) as $pCtx) {
                    $options = $pCtx !== $modx->context->get('key') ? array('context' => $pCtx) : array();
                    $pcchildren = $modx->getChildIds($parent, $depth, $options);
                    if (!empty($pcchildren))
                        $pchildren = array_merge($pchildren, $pcchildren);
                }
            }
        }
        $parentArray[] = $parent;
    } else {
        $pContext = array_key_exists($parent, $pcMap) ? $pcMap[$parent] : false;
        if ($pContext && $contextSpecified && !in_array($pContext, $contextArray, true)) {
            $parent = next($parents);
            continue;
        }
        $parentArray[] = $parent;
        $options = !empty($pContext) && $pContext !== $modx->context->get('key') ? array('context' => $pContext) : array();
        $pchildren = $modx->getChildIds($parent, $depth, $options);
    }
    if (!empty($pchildren))
        $children = array_merge($children, $pchildren);
    $parent = next($parents);
}
$parents = array_merge($parentArray, $children);
var_dump($parents);

$query = $modx->newQuery('WoolProducts', array(), $dbCacheFlag);

$query->select($modx->getSelectColumns('WoolProducts', 'WoolProducts', '', array('id', 'pagetitle', 'introtext')));

//Sorting
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

//$query->prepare();
//echo $query->toSQL();
$list = $modx->getCollection('WoolProducts', $query);

foreach ($list as $var) {
    $results = $var->toArray();
    $output .= $modx->parseChunk($tpl, $results, '[[+' . $prefix);
}
return $output;