<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'bid' => 
  array (
    'field' => 'bid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'bname' => 
  array (
    'field' => 'bname',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'logo' => 
  array (
    'field' => 'logo',
    'type' => 'varchar(250)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'sort' => 
  array (
    'field' => 'sort',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'ishot' => 
  array (
    'field' => 'ishot',
    'type' => 'tinyint(4)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
);
?>