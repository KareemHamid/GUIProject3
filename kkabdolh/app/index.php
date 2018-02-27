<?php
    require_once('global.php');
    require_once('connection.php');

    if (isset($_GET['controller']) && isset($_GET['action'])) {
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    } else {
        $controller = 'site';
        $action     = 'home';
    }

    require_once(SYSTEM_PATH.'/view/layout.php');