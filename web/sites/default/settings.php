<?php

// phpcs:ignoreFile
$databases = [];

$settings['hash_salt'] = 'Vs-nbvrF5AGKz9jGT6pEQlMwI56pQTMXlr4UUjzR0TOJY0YWxeoOabIlwo_MkQg4_rVisd1DsA';

$settings['update_free_access'] = FALSE;

$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$settings['entity_update_batch_size'] = 50;

$settings['entity_update_backup'] = TRUE;

$settings['state_cache'] = TRUE;

$settings['migrate_node_migrate_type_classic'] = FALSE;
$databases['default']['default'] = array (
  'database' => 'drupal8',
  'username' => 'dbuser',
  'password' => 'chAKunRAif',
  'prefix' => '',
  'host' => 'database',
  'port' => '3306',
  'isolation_level' => 'READ COMMITTED',
  'driver' => 'mysql',
  'namespace' => 'Drupal\\mysql\\Driver\\Database\\mysql',
  'autoload' => 'core/modules/mysql/src/Driver/Database/mysql/',
);
$settings['config_sync_directory'] = 'sites/default/files/config_aRsx6Q_ssfph20TE8GhVSNlRMSSPikr8Bzp7Gmcd7RWsD208JhyM2lOXEiUkf7WZCkKWGaM3Ig/sync';
