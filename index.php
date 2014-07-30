<?php
  
  error_reporting(E_ALL);
  ini_set('displays_errors',true);
  define('IndexLoader',true);
  include 'includes/init.php';  // aqui se incluye todas las clases y metodos de la vista controller
  session_start(); // aqui hago uso de una session
  View::load('HTMLhead.php');  // aqui por medio del mensaje de la clase View cargo una pagina
  if(isset($_GET['view'])){  // me fijo si esta declarada y si es asi hago la carga desde el url view
     View::load($_GET['view']);
  
  }
  else{

  }
  View::load('HTMLfoot.php');
  
  

?>
