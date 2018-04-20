<?php
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	
  if (isset($_GET['pg'])) {
    $controller = 'index';
    $pg     = $_GET['pg'];
  } 
  else {
    $controller = 'index';
    $pg     = 'home';
  }

  require_once('views/layout.php');
?>