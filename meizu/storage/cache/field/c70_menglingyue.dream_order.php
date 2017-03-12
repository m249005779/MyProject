<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'orid' => 
  array (
    'field' => 'orid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'ordernum' => 
  array (
    'field' => 'ordernum',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'addid' => 
  array (
    'field' => 'addid',
    'type' => 'int(10)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'price' => 
  array (
    'field' => 'price',
    'type' => 'varchar(10)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'ordertime' => 
  array (
    'field' => 'ordertime',
    'type' => 'varchar(20)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'remark' => 
  array (
    'field' => 'remark',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'orderstatus' => 
  array (
    'field' => 'orderstatus',
    'type' => 'tinyint(2)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'uid' => 
  array (
    'field' => 'uid',
    'type' => 'int(10)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'gid' => 
  array (
    'field' => 'gid',
    'type' => 'int(10)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'options' => 
  array (
    'field' => 'options',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'gname' => 
  array (
    'field' => 'gname',
    'type' => 'varchar(50)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'glid' => 
  array (
    'field' => 'glid',
    'type' => 'int(10)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'totalprice' => 
  array (
    'field' => 'totalprice',
    'type' => 'varchar(10)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'quantity' => 
  array (
    'field' => 'quantity',
    'type' => 'tinyint(3) unsigned',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
);
?>