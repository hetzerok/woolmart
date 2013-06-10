<?php
$wm = $modx->getService('woolmart', 'WoolMart', $modx->getOption('woolmart.core_path', null, $modx->getOption('core_path') . 'components/woolmart/') . 'model/woolmart/', $scriptProperties);
if (!($wm instanceof WoolMart))
    return '';
$m = $modx->getManager();
if($m->createObjectContainer('WoolOptionVal')) {
    echo 'well done';
}