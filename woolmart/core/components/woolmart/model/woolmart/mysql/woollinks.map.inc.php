<?php
$xpdo_meta_map['WoolLinks']= array (
  'package' => 'woolmart',
  'version' => NULL,
  'table' => 'wool_links',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'type' => NULL,
    'name' => NULL,
    'description' => NULL,
  ),
  'fieldMeta' => 
  array (
    'type' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'index' => 'index',
    ),
    'name' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
    'description' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
    ),
  ),
  'indexes' => 
  array (
    'type' => 
    array (
      'alias' => 'type',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'type' => 
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
    'Links' => 
    array (
      'class' => 'WoolProductLink',
      'local' => 'id',
      'foreign' => 'link',
      'owner' => 'local',
      'cardinality' => 'many',
    ),
  ),
);
