<?php
$wm = $modx->getService('woolmart', 'WoolMart', $modx->getOption('woolmart.core_path', null, $modx->getOption('core_path') . 'components/woolmart/') . 'model/woolmart/', $scriptProperties);
if (!($wm instanceof WoolMart))
    return '';

/* setup default properties */
$tpl = $modx->getOption('tpl', $scriptProperties, 'rowTpl');
$sort = $modx->getOption('sort', $scriptProperties, 'name');
$dir = $modx->getOption('dir', $scriptProperties, 'ASC');

$query = $modx->newQuery('WoolProducts');
//$query->prepare();
//echo $query->toSQL();
$list = $modx->getCollection('WoolProducts', $query);

foreach ($list as $var) {
    $output[] = $var->toArray();
}
var_dump($output);