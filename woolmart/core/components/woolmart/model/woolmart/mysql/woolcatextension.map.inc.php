<?php
$xpdo_meta_map['WoolCatExtension']= array (
  'package' => 'woolmart',
  'version' => NULL,
  'table' => 'wool_cat_extension',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'producttemplate' => 0,
  ),
  'fieldMeta' => 
  array (
    'producttemplate' => 
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
    'producttemplate' => 
    array (
      'alias' => 'producttemplate',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'producttemplate' => 
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
    'ProductTemplate' => 
    array (
      'class' => 'modTemplate',
      'local' => 'producttemplate',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Category' => 
    array (
      'class' => 'WoolCategories',
      'local' => 'id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Products' => 
    array (
      'class' => 'WoolCatProducts',
      'local' => 'id',
      'foreign' => 'catid',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
