<?php
$xpdo_meta_map['WoolOptionVal']= array (
  'package' => 'woolmart',
  'version' => NULL,
  'table' => 'wool_option_val',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'productid' => 0,
    'width' => 0,
    'height' => 0,
    'length' => 0,
  ),
  'fieldMeta' => 
  array (
    'productid' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'width' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => true,
      'default' => 0,
    ),
    'height' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => true,
      'default' => 0,
    ),
    'length' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => true,
      'default' => 0,
    ),
  ),
  'indexes' => 
  array (
    'productid' => 
    array (
      'alias' => 'productid',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'productid' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'aggregates' => 
  array (
    'Product' => 
    array (
      'class' => 'WoolProducts',
      'local' => 'productid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
  'fieldmeta' => 
  array (
    'width' => 
    array (
      'dbtype' => 'INT',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => true,
      'default' => '0',
    ),
  ),
);
