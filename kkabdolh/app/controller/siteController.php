<?php


class SiteController {

	public function loginProcess($un, $pw) {
		$correctUsername = 'admin@vt.edu';
		$correctPassword = '123';
		if($un == $correctUsername && $pw == $correctPassword)
		{
			session_start();
			$_SESSION['username'] = $un;
		}
		header('Location: '.BASE_URL.'/');
	}

	public function logout() {
		session_start();
		if (isset($_SESSION['username'])) {
			$_SESSION = [];
			session_unset();
			session_destroy();
		}
		$this->home();
	}

 	 public function home() {
		$pageTitle = 'Site';
		if(!isset($_SESSION['username'])) 
			include_once SYSTEM_PATH.'/view/site/home.tpl';
		else
			include_once SYSTEM_PATH.'/view/site/home(loggedin).tpl';
  }

}
