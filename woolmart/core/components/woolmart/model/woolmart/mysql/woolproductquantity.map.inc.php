<?php
$xpdo_meta_map['WoolProductQuantity']= array (
  'package' => 'woolmart',
  'version' => NULL,
  'table' => 'wool_product_quantity',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'productid' => 0,
    'storeid' => 0,
    'quantity' => 0,
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
    'storeid' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'quantity' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
  ),
  'indexes' => 
  array (
    'productquantity' => 
    array (
      'alias' => 'productquantity',
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
    'Store' => 
    array (
      'class' => 'WoolStores',
      'local' => 'storeid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
