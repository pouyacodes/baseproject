<?php

define("DS", DIRECTORY_SEPARATOR);
define("SYSTEM_PATH", dirname(__DIR__));
define("APP_PATH", __DIR__);

$configPath = SYSTEM_PATH . DS . 'config.php';
if( !file_exists($configPath) )
	throw new Exception("Config file is missing. Please make sure a config file (config.php) is here: " . SYSTEM_PATH);

$config = require_once $configPath;
require_once SYSTEM_PATH . DS . 'bootstrap.php';