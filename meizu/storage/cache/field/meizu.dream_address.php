<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'addid' => 
  array (
    'field' => 'addid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'phone' => 
  array (
    'field' => 'phone',
    'type' => 'varchar(12)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'city' => 
  array (
    'field' => 'city',
    'type' => 'varchar(200)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'username' => 
  array (
    'field' => 'username',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'address' => 
  array (
    'field' => 'address',
    'type' => 'varchar(200)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
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
);
?>