<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'tid' => 
  array (
    'field' => 'tid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'tname' => 
  array (
    'field' => 'tname',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
);
?>