<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forum</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Margarine" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="forum.css">
</head>
<body>
	<?php require_once('../navbar.html') ?>
	<div class="main-wrapper">
		<h1>Forumul Baby Stank</h1>
		
		<h2>Topicuri:</h2>
		<ul>
			<li><a href="alaptare.php">Alaptare</a></li>
			<li><a href="timp_liber.php">Cum sa ne petrecem timpul liber?</a></li>
			<li><a href="sanatate.php">Probleme de sanatate</a></li>
		</ul>
	</div>
</body>
</html>
