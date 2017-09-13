<?php
	require_once('include_prepare.php');

	$login->purge();

	doHeader(false);
	doLogin();
	doFooter();
?>