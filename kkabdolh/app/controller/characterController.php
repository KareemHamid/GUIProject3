<?php

class CharacterController {

	public function view() {
		if (!isset($_GET['name']))
			return call('site', 'home');
		$name = $_GET['name'];
		$post = Character::findCharacter($name);
		require_once(SYSTEM_PATH.'/view/characters/index.php');
	}
	
	public function relationships() {
		if (!isset($_GET['name']))
			return call('site', 'home');
		$name = $_GET['name'];
		$list = Character::findRelations($name);
		include_once SYSTEM_PATH.'/view/characters/relationships.php';
	}

	public function add() {
		if (!isset($_GET['name']))
			return call('site', 'home');
		$name = $_GET['name'];
		include_once SYSTEM_PATH.'/view/characters/add_relationship.php';
	  }
	  
	public function list() {
		$charList = Character::all();
		include_once SYSTEM_PATH.'/view/characters/list_page.php';
  	}
}
