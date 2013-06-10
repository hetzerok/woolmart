<?php

$fileName = $modx->woolmart->config['modelPath'] . 'woolmart/mysql/wooloptionval.map.inc.php';
require_once $fileName;
$header= '<?php';
$className = 'WoolOptionVal';
$error = false;
$fieldname = 'length';
$type = 'integer';

switch ($type) {
    case 'integer':
        $dbtype = 'INT';
        $precision = '10';
        $null = 'NOT NULL';
        $default = 0;
        break;
    case 'string':
        $dbtype = 'VARCHAR';
        $precision = '255';
        $null = 'NOT NULL';
        $default = '';
        break;
}
$anull = ($null == 'NOT NULL') ? true : false;
$query = new xPDOCriteria($modx, '
    ALTER TABLE `' . $modx->config['table_prefix'] . $xpdo_meta_map[$className]['table'] . '` 
    ADD `' . $fieldname . '` ' . $dbtype . '(' . $precision . ') ' . $null . ' DEFAULT ' . $default . '');
//$query->prepare();
//echo $query->toSQL();
if ($query->prepare() && $query->stmt->execute()) {
    $xpdo_meta_map[$className]['fields'][$fieldname] = $default;
    $xpdo_meta_map[$className]['fieldMeta'][$fieldname] = array(
        'dbtype' => strtolower($dbtype),
        'precision' => $precision,
        'phptype' => $type,
        'null' => $anull,
        'default' => $default
    );
    $fileContent = $header . "\n\$xpdo_meta_map['" . $className . "']= " . var_export($xpdo_meta_map[$className], true) . ";\n";
    if ($file = @ fopen($fileName, 'wb')) {
        if (!fwrite($file, $fileContent)) {
            $this->manager->xpdo->log(xPDO::LOG_LEVEL_ERROR, "Could not write to file: {$fileName}");
            $error = true;
        }
        fclose($file);
    } else {
        $this->manager->xpdo->log(xPDO::LOG_LEVEL_ERROR, "Could not open or create file: {$fileName}");
        $error = true;
    }
} else {
    $error = true;
}

/* Для теста */
//$option = $modx->newObject($className, array(
//   'productid' => 1, 
//   'width' => 1345,   
//));
//$option->save();

if (!$error) {
    return $modx->error->success('olololo', $result);
} else {
    return 'xuypizdaijigurda';
}
