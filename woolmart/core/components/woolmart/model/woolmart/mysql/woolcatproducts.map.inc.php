<?php
$xpdo_meta_map['WoolCatProducts']= array (
  'package' => 'woolmart',
  'version' => NULL,
  'table' => 'wool_cat_products',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'productid' => 0,
    'catid' => 0,
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
    'catid' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
  ),
  'indexes' => 
  array (
    'catproduct' => 
    array (
      'alias' => 'catproduct',
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
        'catid' => 
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
    'Category' => 
    array (
      'class' => 'WoolCategories',
      'local' => 'catid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'CommonPattern' => 
    array (
      'class' => 'WoolCatExtension',
      'local' => 'catid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
