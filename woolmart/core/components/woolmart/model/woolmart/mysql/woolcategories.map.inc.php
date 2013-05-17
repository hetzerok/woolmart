<?php
$xpdo_meta_map['WoolCategories']= array (
  'package' => 'woolmart',
  'version' => NULL,
  'extends' => 'modResource',
  'fields' => 
  array (
    'class_key' => 'woolCategory',
  ),
  'fieldMeta' => 
  array (
    'class_key' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '100',
      'phptype' => 'string',
      'null' => false,
      'default' => 'woolCategory',
    ),
  ),
  'composites' => 
  array (
    'CatExtension' => 
    array (
      'class' => 'WoolCatExtension',
      'local' => 'id',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'local',
    ),
  ),
  'aggregates' => 
  array (
    'Products' => 
    array (
      'class' => 'WoolCatProducts',
      'local' => 'id',
      'foreign' => 'catid',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'CurrentOptions' => 
    array (
      'class' => 'WoolCatOptions',
      'local' => 'id',
      'foreign' => 'catid',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
