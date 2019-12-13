<?php

	$environment = 'local';


	if($environment==='local') {
		define( 'SITE_URL', 'http://localhost/' );
		define('SITE_PATH', '/var/www/html/');
		define('DB_HOST', 'localhost');
		define('DB_USER', 'jds');
		define('DB_PASS', 'password');
		define('DB_NAME', '');

		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
		
	} else {
		define('SITE_URL', '');
		define('SITE_PATH', 'path_here');
		define('DB_HOST', 'localhost');
		define('DB_USER', '');
		define('DB_PASS', '');
		define('DB_NAME', '');		
	}


