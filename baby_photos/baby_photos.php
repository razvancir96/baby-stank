<!DOCTYPE html>
<html>
<head>
	<title>Baby photos</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Margarine" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="baby_photos.css">
</head>
<body>
	<?php 
		session_start();
		require_once('../navbar.html');
		require_once('../database/db_functions.php');

		echo '<div class="main-wrapper">';
			$images = list_photos();
			echo '<div class="scrollable-component">';
			foreach ($images as $image) {
				echo '<div class="baby-image">' . 
						'<h1>' .$image->image_name . '</h1>' .
						'<img src="imagini/' . $image->image_url .  '">' .
						'<p>Added by user: ' . $image->username . '</p>' .
						'<p class="upload-date">' . $image->creation_date . '</p>' .
					'</div>';
			}
			echo '</div>';

			if (isset($_SESSION['username'])) {
				echo '<h2>Adauga o imagine:</h2>';
				echo '<form class="add-form" method="post" enctype="multipart/form-data">
						<label for="image_name">Numele imaginii:</label>
				        <input type="text" name="image_name" required/>
				        <label for="baby_image">Imaginea propriu zisa:</label>
				        <input type="file" name="baby_image" required/>
				        <input type="submit" name="add_image" value="Adauga"/>
				    </form>';

			} else {
				echo '<p class="login-message">Pentru a posta o imagine trebuie sa va logati.</p>';
			}

			if (isset($_POST['add_image'])) {
			    if (isset($_FILES['baby_image'])) {
			    	// if we do not have error
			        if ($_FILES['baby_image']['error'] == 0) {
			            switch ($_FILES['baby_image']['type']) {
			            	// we make sure it's a valid format
			                case 'image/jpg':
			                case 'image/jpeg':
			                case 'image/png':
			                case 'image/bmp':
			                case 'image/gif':
			                    $name = uniqid().$_FILES['baby_image']['name'];
			                    $server_save = move_uploaded_file($_FILES['baby_image']['tmp_name'], 'imagini/'.$name);
			                    if ($server_save) {
			                        $photo = add_photo($name, $_POST['image_name'], $_SESSION['username']);
			                        if ($photo) {
			                            header('Location:baby_photos.php');
			                        } else {
			                            unlink('imagini/'.$name);
			                            echo '<p>Eroare la adaugarea imaginii.</p>';
			                        }
			                    } else {
			                        echo '<p>Eroare la salvarea pe server.</p>';
			                    }
			                    break;

			                default:
			                    echo '<p>Format-ul imaginii trebuie sa fie JPG, JPEG, PNG, BMP sau GIF.</p>';
			            }
			        }
			    }
			}
		echo '</div>';
	?>
</body>
</html>

