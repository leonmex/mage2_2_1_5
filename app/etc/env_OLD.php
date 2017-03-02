<?php
return array (
  'backend' => 
  array (
    'frontName' => 'admin-service',
  ),
  'crypt' => 
  array (
    'key' => '3167a1c0606c3a0656909d81ee8f7634',
  ),
  'session' => 
  array (
    'save' => 'db',
  ),
  'db' => 
  array (
    'table_prefix' => '',
    'connection' => 
    array (
      'default' => 
      array (
        'host' => 'dbgeneral.cjgkiwxapjfp.eu-central-1.rds.amazonaws.com',
        'dbname' => 'rentonedronem2',
        'username' => 'generalUser',
        'password' => 'generalUser2015',
        'active' => '1',
        'profiler' => 
        array (
          'class' => '\\Magento\\Framework\\DB\\Profiler',
          'enabled' => true,
        ),
      ),
    ),
  ),
  'resource' => 
  array (
    'default_setup' => 
    array (
      'connection' => 'default',
    ),
  ),
  'x-frame-options' => 'SAMEORIGIN',
  'MAGE_MODE' => 'production',
  'cache_types' => 
  array (
    'config' => 0,
    'layout' => 0,
    'block_html' => 0,
    'collections' => 0,
    'reflection' => 0,
    'db_ddl' => 0,
    'eav' => 0,
    'customer_notification' => 0,
    'full_page' => 0,
    'config_integration' => 0,
    'config_integration_api' => 0,
    'translate' => 0,
    'config_webservice' => 0,
    'compiled_config' => 1,
  ),
  'install' => 
  array (
    'date' => 'Tue, 23 Aug 2016 09:29:02 +0000',
  ),
);
