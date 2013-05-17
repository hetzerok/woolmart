<?php
$xpdo_meta_map['WoolProducts']= array (
  'package' => 'woolmart',
  'version' => NULL,
  'table' => 'wool_products',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'pagetitle' => '',
    'longtitle' => '',
    'description' => '',
    'introtext' => NULL,
    'content' => NULL,
    'createdon' => 0,
    'publishedon' => 0,
    'deletedon' => 0,
    'published' => 0,
    'deleted' => 0,
    'hidemenu' => 0,
    'template' => 0,
    'menuindex' => 0,
    'alias' => '',
    'uri' => '',
    'article' => NULL,
    'price' => 0,
    'old_price' => 0,
    'image' => NULL,
    'weight' => 0,
    'new' => 0,
    'popular' => 0,
    'favorite' => 0,
    'vendor' => 0,
  ),
  'fieldMeta' => 
  array (
    'pagetitle' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'fulltext',
      'indexgrp' => 'content_ft_idx',
    ),
    'longtitle' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'fulltext',
      'indexgrp' => 'content_ft_idx',
    ),
    'description' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
      'index' => 'fulltext',
      'indexgrp' => 'content_ft_idx',
    ),
    'introtext' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'index' => 'fulltext',
      'indexgrp' => 'content_ft_idx',
    ),
    'content' => 
    array (
      'dbtype' => 'mediumtext',
      'phptype' => 'string',
      'index' => 'fulltext',
      'indexgrp' => 'content_ft_idx',
    ),
    'createdon' => 
    array (
      'dbtype' => 'int',
      'precision' => '20',
      'phptype' => 'timestamp',
      'null' => false,
      'default' => 0,
    ),
    'publishedon' => 
    array (
      'dbtype' => 'int',
      'precision' => '20',
      'phptype' => 'timestamp',
      'null' => false,
      'default' => 0,
    ),
    'deletedon' => 
    array (
      'dbtype' => 'int',
      'precision' => '20',
      'phptype' => 'timestamp',
      'null' => false,
      'default' => 0,
    ),
    'published' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'attributes' => 'unsigned',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'deleted' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'attributes' => 'unsigned',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'hidemenu' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'attributes' => 'unsigned',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'template' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'menuindex' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'alias' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
      'default' => '',
      'index' => 'index',
    ),
    'uri' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '1000',
      'phptype' => 'string',
      'null' => true,
      'default' => '',
      'index' => 'index',
    ),
    'article' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '50',
      'phptype' => 'varchar',
      'null' => true,
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
    'old_price' => 
    array (
      'dbtype' => 'decimal',
      'precision' => '12,2',
      'phptype' => 'float',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'image' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => true,
    ),
    'weight' => 
    array (
      'dbtype' => 'decimal',
      'precision' => '13,3',
      'phptype' => 'float',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'new' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'attributes' => 'unsigned',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'popular' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'attributes' => 'unsigned',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'favorite' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'attributes' => 'unsigned',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'vendor' => 
    array (
      'dbtype' => 'int',
      'precision' => '10',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
  ),
  'indexes' => 
  array (
    'alias' => 
    array (
      'alias' => 'alias',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'alias' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
    'published' => 
    array (
      'alias' => 'published',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'published' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'template' => 
    array (
      'alias' => 'template',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'template' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'menuindex' => 
    array (
      'alias' => 'menuindex',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'menuindex' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'deleted' => 
    array (
      'alias' => 'deleted',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'deleted' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'hidemenu' => 
    array (
      'alias' => 'hidemenu',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'hidemenu' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'uri' => 
    array (
      'alias' => 'uri',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'uri' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
    'article' => 
    array (
      'alias' => 'article',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'article' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
    'price' => 
    array (
      'alias' => 'price',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'price' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
    'old_price' => 
    array (
      'alias' => 'old_price',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'old_price' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
    'weight' => 
    array (
      'alias' => 'weight',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'weight' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
    'new' => 
    array (
      'alias' => 'new',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'new' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
    'popular' => 
    array (
      'alias' => 'popular',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'popular' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
    'favorite' => 
    array (
      'alias' => 'favorite',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'favorite' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
    'vendor' => 
    array (
      'alias' => 'vendor',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'vendor' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
    'content_ft_idx' => 
    array (
      'alias' => 'content_ft_idx',
      'primary' => false,
      'unique' => false,
      'type' => 'FULLTEXT',
      'columns' => 
      array (
        'pagetitle' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'longtitle' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'description' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'introtext' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
        'content' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => true,
        ),
      ),
    ),
    'cache_refresh_idx' => 
    array (
      'alias' => 'cache_refresh_index',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'menuindex' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
        'id' => 
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
    'Template' => 
    array (
      'class' => 'WoolVendors',
      'local' => 'vendor',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Vendor' => 
    array (
      'class' => 'modTemplate',
      'local' => 'template',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
    'Categories' => 
    array (
      'class' => 'WoolCategories',
      'local' => 'id',
      'foreign' => 'catid',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'CommonPattern' => 
    array (
      'class' => 'WoolCatExtension',
      'local' => 'id',
      'foreign' => 'catid',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'Masters' => 
    array (
      'class' => 'WoolProductLinks',
      'local' => 'id',
      'foreign' => 'slave',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'Slaves' => 
    array (
      'class' => 'WoolProductLinks',
      'local' => 'id',
      'foreign' => 'master',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'Quantity' => 
    array (
      'class' => 'WoolProductQuantity',
      'local' => 'id',
      'foreign' => 'productid',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
    'MemberPrices' => 
    array (
      'class' => 'WoolProductMemberPrices',
      'local' => 'id',
      'foreign' => 'productid',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
