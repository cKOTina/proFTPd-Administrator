<?php
require_once('class_database.php');
require_once('class_database_mysql.php');

function db_get_dbclass() {
	if ($GLOBALS['config_database_type'] == 'MySQL') return new MySQL();
	else return new Database();
}
?>