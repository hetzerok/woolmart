<?php
$xpdo_meta_map['WoolProductMemberPrices']= array (
  'package' => 'woolmart',
  'version' => NULL,
  'table' => 'wool_product_member_prices',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'productid' => 0,
    'groupid' => 0,
    'price' => 0,
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
    'groupid' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'price' => 
    array (
      'dbtype' => 'decimal',
      'precision' => '12,2',
      'phptype' => 'float',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
  ),
  'indexes' => 
  array (
    'memberprice' => 
    array (
      'alias' => 'memberprice',
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
        'groupid' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'price' => 
    array (
      'alias' => 'price',
      'primary' => false,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'price' => 
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
    'Membergroup' => 
    array (
      'class' => 'modUserGroup',
      'local' => 'groupid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
