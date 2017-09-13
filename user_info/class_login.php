<?php
class Login {
	var $authenticated = 0;
	var $auth_message  = 'Not logged in...';
	var $auth_userid   = -1;
	var $auth_language = '';

	var $database;

	function Login($database) {
		$this->database = $database;
		session_start();

		if (isset($_SESSION['authenticated'])) {
			if ($_SESSION['authenticated'] == 1) {
				if ($_SESSION['data_hash'] == md5($_SERVER['REMOTE_ADDR'] . $_SERVER['SERVER_ADDR'])) {
					$this->auth_userid   = $_SESSION['userid'];
					$this->authenticated = 1;
					$this->auth_message  = 'Restored session...';
					$this->auth_language = $_SESSION['language'];
					$GLOBALS['config_language'] = $_SESSION['language'];
				} else {
					$this->auth_message  = 'Possible attempt to hijack session...';
				}
			}
		}
	}

	function authenticate($username, $password, $language = 'english') {
		$this->auth_userid = $this->database->get_authentication_uid($username, $password);

		if ($this->auth_userid != -1) {
			$this->authenticated = 1;

			$_SESSION['authenticated'] = 1;
			$_SESSION['userid']        = $this->auth_userid;
			$_SESSION['data_hash']     = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['SERVER_ADDR']);
			$_SESSION['language']      = $language;
			$GLOBALS['config_language']= $language;
			$this->auth_message        = 'User logged in...';
		} else {
			$this->auth_message = 'Username or password incorrect...';
			$_SESSION['authenticated'] = 0;
		}
	}

	function purge() {
		$_SESSION = array();

		if (isset($_COOKIE[session_name()])) {
		   setcookie(session_name(), '', time()-42000, '/');
		}

		session_destroy();
		$this->auth_message = 'Not logged in...';
	}
}
?>