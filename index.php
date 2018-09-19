<?php

  if(!session_id()) {
    session_start();
}

  require_once "config.php";

  $redirectURL = "http://localhost/socialauth/fb-callback.php";
  $permissions = ['email'];
  $loginURL = $helper->getLoginUrl($redirectURL, $permissions);
  echo $loginURL;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalale=no, initial-scale=1.0, maximum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=ede">
	<title>SocialAuth</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="container" style="margin-top: 100px">
    <div class="row justify-content-cneter">
      <div class="col-md-6 col-md-offset-3" align="center"></div>
        <form>
          <input type="button" onclick="window.location = '<?php echo $loginURL; ?>'" value="Login" target="_blank">
        </form>
    </div>
  </div>
<!--
Hello and welcome
<fb:login-button
  scope="public_profile,email,publish_video"
  onlogin="checkLoginState();">
</fb:login-button> -->


<script>
 //  window.fbAsyncInit = function() {
 //    FB.init({
 //      appId      : '1860290527391199',
 //      cookie     : true,
 //      xfbml      : true,
 //      version    : 'v3.1'
 //    });


	// FB.getLoginStatus(function(response) {
	//     statusChangeCallback(response);
	// });
 //  };

 //  (function(d, s, id){
 //     var js, fjs = d.getElementsByTagName(s)[0];
 //     if (d.getElementById(id)) {return;}
 //     js = d.createElement(s); js.id = id;
 //     js.src = "https://connect.facebook.net/en_US/sdk.js";
 //     fjs.parentNode.insertBefore(js, fjs);
 //   }(document, 'script', 'facebook-jssdk'));

 //  	function statusChangeCallback(response){
 //  		if(response.status === 'connected'){
	// 			console.log('Logged in and authenticated');
	// 	}
	// 	else{
	// 		console.log('Not authenticated');
	// 	}
 //  	}

	// function checkLoginState() {
	//   FB.getLoginStatus(function(response) {
	//     statusChangeCallback(response);
	//   });
	// }
</script>

</body>
</html>