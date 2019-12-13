<?php

	class Core {
		public $db;


		public function __construct() {
			session_start();
			$this->db = new Database;
		}


		public function redirect($path) {
			header('Location: ' . SITE_URL . $path);
		}


		
		public function getSalt($n) {
			$seed = str_split('abcdefghijklmnopqrstuvwxyz'
		                 .'ABCDEFGHIJKLMNOPQRSTUVWXYZ'
		                 .'0123456789');
			shuffle($seed);
			$salt = '';
			foreach (array_rand($seed, $n) as $k) $salt .= $seed[$k];
			return $salt;
		}

		
	}