<?php
  if ($_GET['v'] ==  '1'):
    if (isset($_GET['mtd'])):
		$controller = 'api';
		$pg     = $_GET['mtd'];
	else:
		$controller = 'api';
		$pg     = 'error';
	endif;
  else:
    $controller = 'index';
    $pg     = 'login';
	require_once('views/layout.php');
  endif;
  require_once('routes.php');
?>