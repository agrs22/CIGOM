<?php
  function call($controller, $pg) {
    // require the file that matches the controller name
    require_once('controllers/' . $controller . '_controller.php');
	
    // create a new instance of the needed controller
    switch($controller) {
    case 'index':
		require_once('models/coordinates.php');
        $controller = new IndexController();
		break;
	case 'api':
		require_once('models/coordinates.php');
        $controller = new ApiController();
		$pg='a'.$pg;
		break;
		   
    }
    // call the action
    $controller->{ $pg }();
  }

  // just a list of the controllers we have and their actions
  // we consider those "allowed" values
  $controllers = array('index' => ['home', 'error'], 
						'api' => ['listfiles','data', 'error']);

  // check that the requested controller and action are both allowed
  // if someone tries to access something else he will be redirected to the error action of the pages controller
  if (array_key_exists($controller, $controllers)) {
    if (in_array($pg, $controllers[$controller])) {
      call($controller, $pg);
    } else {
      call('index', 'error');
    }
  } else {
    call('index', 'error');
  }
?>