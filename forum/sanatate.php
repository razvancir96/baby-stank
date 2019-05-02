<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sanatate</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Margarine" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="forum_pages.css">
</head>
<body>
	<!-- we keep the navbar -->
	<?php require_once '../navbar.html' ?>

	<div class="main-wrapper">
		<h1>Forumul Baby Stank</h1>
		<h2>Topic: Sanatate</h2>
		<?php 
			require_once('../database/db_functions.php');
			$posts = get_health_posts();
			echo '<div class="post-wrapper">';
			foreach ($posts as $post) {
				if (isset($_SESSION['username']) && $post->username == $_SESSION['username']){
					echo '<div class="post user-post">';
				} else {
					echo '<div class="post">';
				}
					echo '<h3>' . $post->username . '</h3>' .
						'<p class="post-content">' . $post->content . '</p>'.
						'<p class="date">' . $post->creation_date . '</p>' .
					'</div>';
			}
			echo '</div>';
		?>
		
		<?php 
			if (isset($_SESSION['username'])) {
				echo '<form method="post">
						<textarea name="forum_post"></textarea>
						<input type="submit" name="send_message" value="Trimite">
					</form>';
				if (isset($_POST['send_message'])) {
					$new_post = add_post($_SESSION['username'], $_POST['forum_post'], 'sanatate');
					// var_dump($new_post);
					header('Location:sanatate.php');
				}
			} else {
				echo '<div class="register-link center">
		            <p>Utilizator nelogat. Pentru a putea lasa un comentariu apasati pe
		            	<a href="http://localhost/proiect_pw/login.php">Login</a>
		            </p>
		        </div>';
			}
		?>
	</div>

</body>
</html>