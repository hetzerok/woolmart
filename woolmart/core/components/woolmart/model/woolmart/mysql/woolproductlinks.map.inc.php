<?php
$xpdo_meta_map['WoolProductLinks']= array (
  'package' => 'woolmart',
  'version' => NULL,
  'table' => 'wool_product_links',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'link' => NULL,
    'master' => NULL,
    'slave' => NULL,
  ),
  'fieldMeta' => 
  array (
    'link' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'attributes' => 'unsigned',
      'null' => false,
      'index' => 'index',
    ),
    'master' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'attributes' => 'unsigned',
      'null' => false,
      'index' => 'index',
    ),
    'slave' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'attributes' => 'unsigned',
      'null' => false,
      'index' => 'index',
    ),
  ),
  'indexes' => 
  array (
    'link' => 
    array (
      'alias' => 'link',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'link' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'master' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'slave' => 
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
    'Link' => 
    array (
      'class' => 'WoolLinks',
      'local' => 'link',
      'foreign' => 'id',
      'owner' => 'foreign',
      'cardinality' => 'one',
    ),
    'Master' => 
    array (
      'class' => 'WoolProducts',
      'local' => 'master',
      'foreign' => 'id',
      'owner' => 'foreign',
      'cardinality' => 'one',
    ),
    'Slave' => 
    array (
      'class' => 'WoolProducts',
      'local' => 'slave',
      'foreign' => 'id',
      'owner' => 'foreign',
      'cardinality' => 'one',
    ),
  ),
);
