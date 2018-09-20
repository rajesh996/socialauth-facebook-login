# socialauth-facebook-login

An example of integrating facebook login into a simple php website using Facebook PHP SDK

1. First create a Facebook developers account if you don't have one by going to <a href="https://www.developers.facebook.com">Facebook developers</a>.
2. After creating developer account, go to your apps section and create a new app b following the steps mentioned there.

3. After creating an app, you can see the app ID on top left. Click on it to copy the app ID, we need it later.
4. Now go to the settings and you can see app secret, it will be hidden. Enter your facebook password to see the app secret.
5. Copy the secret key and keep app ID & SECRET KEY in safe place.

CLONE THE REPOSITORY
1. Now clone this repository by using zip download or using https options.
2. Now open config.php file and place your app's APP ID & APP SECRET KEY wherever it is mentioned.
3. Edit the same in fb-callback.php file and also make sure to put the app ID in the file at <strong>54</strong> line.

START THE SERVER
1. Start the server and go to the web browser.
2. In the browser, enter http://localhost/socialauth  to see the result.
3. If you can see the link and a login button, u did it correct.
4. Click on the login button to see your name, email and id.

//After making users Signin into the website using facebook login (facebook-php-sdk), a unique code will be attached to the //redirect uri.

//Using this code an access token will be generated.
