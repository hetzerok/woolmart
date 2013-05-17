<?php
$xpdo_meta_map['WoolOptionValues']= array (
  'package' => 'woolmart',
  'version' => NULL,
  'table' => 'wool_option_values',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'optionid' => 0,
    'productid' => 0,
    'value' => NULL,
  ),
  'fieldMeta' => 
  array (
    'optionid' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'productid' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'value' => 
    array (
      'dbtype' => 'mediumtext',
      'phptype' => 'string',
      'null' => false,
    ),
  ),
  'indexes' => 
  array (
    'optionvalue' => 
    array (
      'alias' => 'optionvalue',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'optionid' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
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
    'Option' => 
    array (
      'class' => 'WoolOptions',
      'local' => 'optionid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Product' => 
    array (
      'class' => 'WoolProducts',
      'local' => 'productid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
