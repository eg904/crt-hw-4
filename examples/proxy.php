<?php

use App\ConfigClass;
use App\PrefixedConfig;

require_once __DIR__ . '/../vendor/autoload.php';

$config = ConfigClass::getInstance();

$prefixed_config = new PrefixedConfig($config, 'prefix_');

echo $config->get('DB_USER') . "\n";
echo $prefixed_config->get('DB_USER') . "\n";