<?php
  class ApiController {
	public function alistfiles() {
	   if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	  $devices = Coordinate::filelist('data');
	  echo json_encode($devices);
    }
	
	public function adata() {
	   if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	  $devices = Coordinate::latlon($_GET['file']);
	  echo json_encode($devices);
    }

    public function aerror() {
      require_once('views/index/error.php');
    }
  }
?>