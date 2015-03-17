<?php
	/**
	 * Default back controller
	 * @author Antoine De Gieter
	 * @copyright Net Production Köbe & Co
	 */

	require_once 'config/config.inc.php';

	# Set language
	if (isset($_GET['lang'])
	&& in_array($_GET['lang'], $authorized_languages)):
		$lang = $_GET['lang'];
		$_SESSION['lang'] = $lang;
		setcookie('lang', $lang, time() + (3600 * 24 * 30));
	elseif(isset($_SESSION['lang'])):
		$lang = $_SESSION['lang'];
	elseif(isset($_COOKIE['lang'])):
		$lang = $_COOKIE['lang'];
	else:
		$lang = DEFAULT_LANGUAGE;
	endif;

	require_once 'lib/functions.inc.php';

	includeLanguage($lang);

	# Sessions
	session_save_path();
	session_start();

	# PHPMailer
	require_once 'lib/phpmailer.class.php';

	# Models
	function __autoload($model) {
		if (file_exists(DEFAULT_MODEL_PATH . strtolower($model) . DEFAULT_MODEL_EXTENSION))
			includeModel($model);
		else
			throw new Exception("Unable to load $model.");
	}

	# Set page
	if (isset($_GET['page'])
	&& in_array($_GET['page'], $authorized_pages)):
		includeController($_GET['page']);
	else:
		includeController('home');
	endif;