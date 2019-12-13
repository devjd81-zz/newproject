<?php
	require_once "inc/config.php";
	spl_autoload_register(function($className) {
		require_once 'classes/' . $className . '.php';
	});

	$core = new Core;
	//$user = new User;

	// if($user->isLoggedIn()) {
	// 	$core->redirect('/dashboard');
	// }

	$title = '';
	require_once "inc/header.php";
?>







<?php 
	require_once "inc/footer.php";
?>