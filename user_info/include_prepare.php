<?php
/* This file contains all the information needed to connect
 * to the database.
 */
require_once('include_config.php');
require_once('include_general.php');
require_once('include_database.php');
require_once('class_login.php');

$db = db_get_dbclass();
$db->do_connect();
$db->do_select_db();

if (!$db->is_ready()) {
	doHeader(false);
	doFooter();
	exit();
}

$login = new Login($db);
if (isset($_POST['frm_username']) && isset($_POST['frm_password']) && isset($_POST['frm_language'])) {
	$login->authenticate($_POST['frm_username'], $_POST['frm_password'], $_POST['frm_language']);
}

if (!$login->authenticated) {
	doHeader(false);
	doLogin();
	doFooter();
	exit();
}

include('include_language.php');
?>