<!DOCTYPE html>
<html>
<head>
	<title>Facebook</title>
</head>
<body>

<button id="loginBtn">Facebook Login</button>
<button id="logoutBtn" onclick="javascript:logout();">Logout from Facebook</button>
<div id="response"></div>

<script type="text/javascript">
	
function getUserData() {
FB.api('/me?locale=en_US&fields=name,email,picture.type(large),gender,locale,link', function(response) {
	document.getElementById('response').innerHTML = 'Hello ' + response.name;
	console.log(response);
});
}
 
window.fbAsyncInit = function() {
	//SDK loaded, initialize it
	FB.init({
		appId      : '1553678257995436',
		xfbml      : true,
		version    : 'v2.2'
	});
 
	//check user session and refresh it
	FB.getLoginStatus(function(response) {
		if (response.status === 'connected') {
			//user is authorized
			document.getElementById('loginBtn').style.display = 'none';
			getUserData();
		} else {
			//user is not authorized
		}
	});
};
 
//load the JavaScript SDK
(function(d, s, id){
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) {return;}
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.com/en_US/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
 
//add event listener to login button
document.getElementById('loginBtn').addEventListener('click', function() {
	//do the login
	FB.login(function(response) {
		if (response.authResponse) {
			//user just authorized your app
			document.getElementById('loginBtn').style.display = 'none';
			getUserData();
		}
	}, {scope: 'email,public_profile', return_scopes: true});
}, false);

 function logout() {
            FB.logout(function(response) {
              document.getElementById('response').innerHTML = 'Logged out';
              console.log(response);
            });
        }


</script>

</body>
</html>