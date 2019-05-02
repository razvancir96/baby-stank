<!DOCTYPE html>
<html lang="ro" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Log in</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Margarine" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
	<div class="center">
		<h1 class="logo">Baby Stank</h1>
	</div>
	<div class="form-container">
		<form method="post" class="login-form">
			<input class="login-input" type="text" name="username" placeholder="Username:">
			<input class="login-input" type="password" name="password" placeholder="Password:">
			<input type="submit" name="login" value="Login">
		</form>
	</div>
	<div class="center register-link">
		<p>Not registered yet? 
			<a href="register.php"> Register now</a>
		</p>
	</div>

	<?php
		require_once('database/db_functions.php');
		if (isset($_POST['login'])) {
	        $username = $_POST['username'];
	        $password = $_POST['password'];
	        $valid_login = verify_user($username, $password);
	        if ($valid_login == true) {
	        	session_start();
	        	$_SESSION['username'] = $username;
	            header('Location:index.php');
	        } else {
	            echo '<div class="register-link center">
	            		<p>Login esuat. Verificati username-ul si parola.</p>
	            	</div>';
	        }
	    }
	?>
	
</body>
</html>