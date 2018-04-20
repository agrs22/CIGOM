<?php
error_reporting(E_ALL);
  ini_set('display_errors', '1');
  class IndexController {
    public function home() {
      require_once('views/index/home.php');
    }
	public function docs() {
      require_once('views/index/docs.php');
    }
    public function error() {
      require_once('views/index/error.php');
    }
  }
?>