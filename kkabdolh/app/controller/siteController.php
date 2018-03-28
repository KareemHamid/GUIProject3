<?php

class SiteController {

	public function loginProcess() {
		$correctEmail = 'admin@vt.edu';
		$correctPassword = '123';
		if($_POST['email'] == $correctEmail && $_POST['password'] == $correctPassword)
		{
			$_SESSION['email'] = $_POST['email'];
		}
		header('Location: '.BASE_URL.'/');
	}

	public function logout() {
		if (isset($_SESSION['email'])) {
			$_SESSION = [];
			session_unset();
			session_destroy();
	
		}
		header('Location: '.BASE_URL.'/');
		exit();
	}

 	 public function home() {
		include_once SYSTEM_PATH.'/view/site/home.php';
  	}
}
