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
			<input class="login-input" type="text" name="username" placeholder="Username:" required>
			<input class="login-input" type="email" name="email" placeholder="Email:" required>
			<input class="login-input" type="password" name="password" placeholder="Password:" required>
			<input type="submit" name="register" value="Register">
		</form>
	</div>

	<?php
		require_once('database/db_functions.php');
		if (isset($_POST['register'])) {
	        $username = $_POST['username'];
	        $email = $_POST['email'];
	        $password = $_POST['password'];
	        $registration = create_user($username, $email, $password);
	        if ($registration == true) {
	            echo '<div class="register-link center">
		            <p>Inregistrare cu succes!
		            	<a href="login.php">Login</a>
		            </p>
	            </div>';
	        } else {
	            echo '<div class="register-link center">
	            		<p>Username-ul ales nu este disponibil.</p>
	            	</div>';
	        }
	    }
	?>
	
</body>
</html>

