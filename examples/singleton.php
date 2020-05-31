<?php

use App\ConfigClass;

require_once __DIR__ . '/../vendor/autoload.php';

$config1 = ConfigClass::getInstance();
$config2 = ConfigClass::getInstance();

echo $config1->get('DB_USER') . "\n";
echo $config2->get('DB_USER') . "\n";
