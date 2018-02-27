<?php


class SiteController {

	// route us to the appropriate class method for this action
	public function route($action) {
		switch($action) {
			case 'home':
				$this->home();
				break;
			case 'loginProcess':
				$username = $_POST['email'];
				$password = $_POST['password'];
				$this->loginProcess($username, $password);
				break;
			case 'logout':
				$this->logout();
				break;
		}

	}

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
