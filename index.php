<?php 
	require_once 'app/init.php'; 
	$request = $_SERVER['REQUEST_URI'];
	switch ($request) {
    case '/home' :
        require_once 'app/views/home/index.php';
        break;
    case '/' :
        require_once 'app/views/auth/index.php';
        break;
    case '/about' :
        require 'app/views/about.php';
		break;
	case '/404':
		require 'app/views/404.php';
		break;
    default:
        require 'app/views/auth/index.php';
		break;
	}
?>