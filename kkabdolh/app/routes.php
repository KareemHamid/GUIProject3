<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'home':
        $controller = new SiteController();
      break;
      case 'character':
        // we need the model to query the database later in the controller
        require_once('models/post.php');
        $controller = new CharacterController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('site' => ['home', 'loginProcess', 'logout'],
                       'character' => ['view', 'relationships', 'add']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('site', 'home');
    }
  } else {
    call('site', 'come');
  }