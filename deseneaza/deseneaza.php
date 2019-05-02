<!DOCTYPE html>
<html>
<head>
	<title>Baby photos</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Margarine" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="canvas.css">
</head>
<body>
	<?php 
		session_start();
		require_once '../navbar.html';
		require_once('../database/db_functions.php');
	?>

	<div class="color-palette">
		<div class="red circle"></div>
		<div class="green circle"></div>
		<div class="blue circle"></div>
		<div class="yellow circle"></div>
		<div class="pink circle"></div>
		<div class="orange circle"></div>
		<div class="purple circle"></div>
		<div class="black circle"></div>
	</div>
	<canvas id="canvas"></canvas>

	<script type="text/javascript" src="canvas.js"></script>
</body>
</html>