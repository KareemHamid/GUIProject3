<?php

class CharacterController {

	public function view() {
		if (!isset($_GET['name']))
			return call('site', 'home');
		$name = $_GET['name'];
		$post = Character::loadByName($name);
		$events = Event::findEvents($post->character['char_id']);
		require_once(SYSTEM_PATH.'/view/characters/index.php');
	}
	
	public function relationships() {
		if (!isset($_GET['name']))
			return call('site', 'home');
		$name = $_GET['name'];
		$list = Character::loadRelations($name);
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
	
	public function processEdit() {
		$name = $_GET['name'];
		if ($_POST['submit'] == "Submit") {
			Character::update($name, $_POST['general_description']);
			$eventIDs = $_POST['eventIDs'];
			$eventTitles = $_POST['eventTitles'];
			$eventBodies = $_POST['eventBodies'];
			for ($i = 0; $i < count($eventIDs); $i++) {
				if ($eventIDs[$i] != -1) {
					Event::update($eventIDs[$i], $eventTitles[$i], $eventBodies[$i]);
				}
				else {
					Event::add($name, $eventTitles[$i], $eventBodies[$i]);
				}
			}
		}
		else if ($_POST['submit'] == "Delete") {
			Character::delete($name);
			header('Location: '.BASE_URL.'/characters/');
			exit();
		}
		header('Location: '.BASE_URL.'/characters/'.$name);
		exit();
	}

	public function processAdd() {
		Character::add($_POST);
		header('Location: '.BASE_URL.'/characters/'.$_GET['name'].'/relationships');
		exit();
	}
}
