<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 1);

if ((float)phpversion() < 5.3) {
	exit('App needs php version 5.3 or higher');
}

// load classes
function loadClasses($class_name) {
    if (file_exists($_SERVER['DOCUMENT_ROOT'].'/classes/'. $class_name .'.php')) {
        require_once $_SERVER['DOCUMENT_ROOT'].'/classes/'. $class_name .'.php';
    }
}

spl_autoload_register('loadClasses');

// get content
if (!empty($_GET['route'])) {
   $route = trim(htmlspecialchars(strip_tags($_GET['route'])));
   
   $content = new Content(array('url' => $route));
   $ct = $content->getContent();

   if (!empty($ct)) {
      require $_SERVER['DOCUMENT_ROOT'].'/templates/'. $ct->type .'.php';
   } else {
      require $_SERVER['DOCUMENT_ROOT'].'/templates/404.php';
   }
} else {
	require $_SERVER['DOCUMENT_ROOT'].'/templates/home.php';
}
?>