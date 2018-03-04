<?php


error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 1);

if ((float)phpversion() < 5.3) {
	exit('App needs php version 5.3 or higher');
}

function loadClasses($class_name) {
    require_once $_SERVER['DOCUMENT_ROOT'].'/classes/'.strtolower($class_name).'.php';
}

spl_autoload_register('loadClasses');


?>