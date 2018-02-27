<?php

class CharacterController {

	public function view() {
		if (!isset($_GET['name']))
			return call('site', 'home');
		$name = $_GET['name'];
		$pageTitle = ucfirst(strtolower($name));
		$post = Post::findCharacter($name);
		require_once(SYSTEM_PATH.'/view/character/index.tpl');
	}
	
	public function relationships($name) {
		$pageTitle = 'Relationships';
		include_once SYSTEM_PATH.'/view/sokka_relationships.tpl';
	  }
	  public function add($name) {
		$pageTitle = 'Add Relationship';
		include_once SYSTEM_PATH.'/view/add_relationship.tpl';
  	}
}
