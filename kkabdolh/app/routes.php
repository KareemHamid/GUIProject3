<?php
  function call($controller, $action) {
    require_once('controller/' . $controller . 'Controller.php');

    switch($controller) {
      case 'Site':
        $controller = new SiteController();
      break;
      case 'Character':
        // we need the model to query the database later in the controller
        require_once('model/Character.php');
        require_once('model/Event.php');
        $controller = new CharacterController();
      break;
      default:
        exit("Fatal Error: Incorrect controller name");
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('Site' => ['home', 'loginProcess', 'logout'],
                       'Character' => ['view', 'relationships', 'add', 'list', 'processEdit', 'processAdd']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('site', 'home');
    }
  } else { // Error would go here
    call('site', 'home');
  }