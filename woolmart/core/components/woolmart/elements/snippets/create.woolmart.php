<?php
$wm = $modx->getService('woolmart', 'WoolMart', $modx->getOption('woolmart.core_path', null, $modx->getOption('core_path') . 'components/woolmart/') . 'model/woolmart/', $scriptProperties);
if (!($wm instanceof WoolMart))
    return '';
$m = $modx->getManager();
$m->createObjectContainer('WoolCatExtension');
$m->createObjectContainer('WoolProducts');
$m->createObjectContainer('WoolCatProducts');
$m->createObjectContainer('WoolVendors');
$m->createObjectContainer('WoolLinks');
$m->createObjectContainer('WoolProductLinks');
$m->createObjectContainer('WoolStores');
$m->createObjectContainer('WoolProductQuantity');
$m->createObjectContainer('WoolProductMemberPrices');
$m->createObjectContainer('WoolOptions');
$m->createObjectContainer('WoolOptionValues');
$m->createObjectContainer('WoolCatOptions');
echo 'well done';