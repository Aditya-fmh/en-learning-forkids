<!DOCTYPE HTML>
<html>

<head>
	<title>Login - English Learning For Kids</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="css/style-login.css">
	<script language="JavaScript">
		function Login() {
			var done = 0;
			var password = document.login.password.value;
			password = password.toLowerCase();
			var id = document.login.id.value;
			id = id.toLowerCase();
			if (password == "aditya" && id == "adit") {
				alert("Welcome !!");
				window.location.replace("learn.php");
			} else
			if (done == 0) {
				alert("Wrong password, please check again !!");
			}
		}
	</script>
</head>

<body>
	<div class="container">
		<form name=login>
			<h1>Login</h1>
			<label>Username:</label>
			<input type=text name=id>
			<label>Password:</label>
			<input type=password name=password>
			<button class="buttonlogin" type=button value="Login!" onClick="Login()">Log In</button>
		</form>
	</div>
</body>

</html>