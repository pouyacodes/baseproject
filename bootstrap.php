<?php

date_default_timezone_set($config['app']['timezone'] ?? 'Asia/Tehran');

spl_autoload_register( function ($className) {

	$path = SYSTEM_PATH . DS . 'inc' . DS;
	$chunks = explode('\\', $className);
	$className = array_pop($chunks);
	
	foreach($chunks as $chunk) {
		$path .= $chunk . DS;
	}
	
	$path .= $className . ".php";
	
	if(file_exists($path))
		require_once $path;

} );

$composerAutoloadPath = SYSTEM_PATH . DS . 'vendor' . DS . 'autoload.php';
!file_exists($composerAutoloadPath) || require_once $composerAutoloadPath;