<?php

	// session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => 'YOUR-FACEBOOK-APP-ID',  //replace it with your facebook app id
		'app_secret' => 'YOUR-FACEBOOK-APP-SECRET-KEY',  // replace it with your facebook app secret key
		'default_graph_version' => 'v3.10' //graph api version that is used 
	]);


	$helper = $FB->getRedirectLoginHelper();
?>
