<?php
  function call($controller, $action) {
    require_once('controller/' . $controller . 'Controller.php');

    switch($controller) {
      case 'site':
        $controller = new SiteController();
      break;
      case 'character':
        // we need the model to query the database later in the controller
        require_once('model/character.php');
        $controller = new CharacterController();
      break;
      default:
        exit("Fatal Error: Incorrect controller name");
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('site' => ['home', 'loginProcess', 'logout'],
                       'character' => ['view', 'relationships', 'add', 'list']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('site', 'home');
    }
  } else {
    call('site', 'come');
  }