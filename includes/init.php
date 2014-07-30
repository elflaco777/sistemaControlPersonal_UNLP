<?php

//if (! defined("IndexLoaded"))
//{	die("Acceso incorrecto");}
	define ('debug', true);
 /*** define the site path constant ***/
 $site_path = __DIR__ . "/../";
 define ('__SITE_PATH', $site_path);
   /*** include the controller class ***/ 
   //include __SITE_PATH . '/controller/'. 'controller_base.class.php';

   /*** include the registry class***/
  // include __SITE_PATH . '/controller/'. 'registry.class.php';

   /*** include the router class ***/
   //include __SITE_PATH .'/controller/'. 'router.class.php';
   
   /*** include the template class ***/
   //include __SITE_PATH .'/controller/'. 'template.class.php';
   
   /*** include the template class ***/
   include __SITE_PATH .'/controller/'.'View.class.php';
   
   //include (__SITE_PATH ."/model/db.php"); 
   
   //include (__SITE_PATH ."/includes/funciones.php");
	
	date_default_timezone_set('America/Argentina/Buenos_Aires');
   /*** auto load model class ***/
    /*function __autoload($class_name) 
    {
		$filename = strtolower($class_name).'.class.php';
		$file = __SITE_PATH .'/model/'. $filename;

		if(file_exists($file) == false)
		{	return false;}	
		
		include($file);
    }

   /*** a new registry object***/
 
 //  $registry = new registry;

   /*** create the database registry object ***/
   //$registry->db = db::getInstance();
?>