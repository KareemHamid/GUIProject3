<?php

include_once '../global.php';

// get the identifier for the page we want to load
$action = $_GET['action'];

// instantiate a CharacterController and route it
$sc = new CharacterController();
$sc->route($action);

class CharacterController {

	// route us to the appropriate class method for this action
	public function route($action) {
		switch($action) {
			case 'view':
        		$name = $_GET['name']; // get the character name
				$this->view($name);
				break;
			case 'relationships':
				$name = $_GET['name']; // get the character name
				$this->relationships($name);
				break;
			case 'add':
				$name = $_GET['name']; // get the character name
				$this->add($name);
				break;
		}

	}

	public function view($name) {
		$name = ucfirst(strtolower($name));
		$pageTitle = $name;
		include_once SYSTEM_PATH.'/view/header.tpl';
		if($name == 'Sokka')
			include_once SYSTEM_PATH.'/view/sokka.tpl';
		include_once SYSTEM_PATH.'/view/footer.tpl';
	}
	
	public function relationships($name) {
		$pageTitle = 'Relationships';
		include_once SYSTEM_PATH.'/view/header.tpl';
		if($name == 'sokka')
			include_once SYSTEM_PATH.'/view/sokka_relationships.tpl';
		include_once SYSTEM_PATH.'/view/footer.tpl';
	  }
	  public function add($name) {
		$pageTitle = 'Add Relationship';
		include_once SYSTEM_PATH.'/view/header.tpl';
		if($name == 'sokka')
			include_once SYSTEM_PATH.'/view/add_relationship.tpl';
		include_once SYSTEM_PATH.'/view/footer.tpl';
  	}
}
