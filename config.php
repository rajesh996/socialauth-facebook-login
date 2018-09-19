<?php

	// session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '1860290527391199',
		'app_secret' => '6dcc6172a31b8a5ac7f196de496df4de',
		'default_graph_version' => 'v3.10'
	]);


	$helper = $FB->getRedirectLoginHelper();
?>