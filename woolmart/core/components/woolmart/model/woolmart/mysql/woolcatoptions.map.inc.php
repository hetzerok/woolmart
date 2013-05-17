<?php
$xpdo_meta_map['WoolCatOptions']= array (
  'package' => 'woolmart',
  'version' => NULL,
  'table' => 'wool_cat_options',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'optionid' => 0,
    'catid' => 0,
    'disabled' => 0,
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
    'catid' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'disabled' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'attributes' => 'unsigned',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
  ),
  'indexes' => 
  array (
    'catoption' => 
    array (
      'alias' => 'catoption',
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
        'catid' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'disabled' => 
    array (
      'alias' => 'disabled',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'disabled' => 
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
    'Category' => 
    array (
      'class' => 'WoolCategories',
      'local' => 'catid',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
);
