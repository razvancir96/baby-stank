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
	<link rel="stylesheet" type="text/css" href="magazin.css">
</head>
<body>
	<!-- we keep the navbar -->
	<?php require_once('../navbar.html') ?>
	<?php require_once('../database/db_functions.php');?>

	<div class="main-wrapper">

		<div class="shop-header">
			<h1>Baby Stank - Jucarii</h1>
			<!-- search bar -->
			<form class="search-wrapper" action="search.php">
				<input class="search-input" type="search" name="search" placeholder="Cauta...">
				<button id="search-button" type="submit" name="submit"></button>
			</form>
		</div>
		

		<!-- categories navbar -->
		<div class="shop-categories">
			<div id="musical-button">
				<h2>Muzicale</h2>
			</div>
			<div id="stuffed-button">
				<h2>Plusuri</h2>
			</div>
			<div id="bathroom-button">
				<h2>De baie</h2>
			</div>
		</div>

		
		<!-- content -->
		<div class="musical">
			<h3>Jucarii muzicale</h3>
			<div class="products">
				<?php 
					$musical_products = display_products('muzicale');
					foreach ($musical_products as $musical_product) {
						echo 
						'<div class="product-wrapper">' .
							'<h4>Nume: ' . $musical_product->product_name . '</h4>' .
							'<img src="' . $musical_product->image_url . '">' .
							'<h4>Pret: ' . $musical_product->price . '</h4>' .
							'<h4>Vendor: ' . $musical_product->vendor . '</h4>' .
							'<a href="' . $musical_product->link . '">
								<span class="link-spanner"></span>
							</a>
						</div>';
					}	
				?>
			</div>
		</div>

		<div class="stuffed">
			<h3>Jucarii de plus</h3>
			<div class="products">
				<?php 
					$stuffed_products = display_products('plusuri');
					foreach ($stuffed_products as $stuffed_product) {
						echo 
						'<div class="product-wrapper">' .
							'<h4>Nume: ' . $stuffed_product->product_name . '</h4>'.
							'<img src="' . $stuffed_product->image_url . '">' .
							'<h4>Pret:' . $stuffed_product->price . '</h4>' .
							'<h4>Vendor: ' . $stuffed_product->vendor . '</h4>' .
							'<a href="' . $stuffed_product->link . '">
								<span class="link-spanner"></span>
							</a>
						</div>';
					}	
				?>
			</div>
		</div>

		<div class="bathroom">
			<h3>Jucarii de baie</h3>
			<div class="products">
				<?php 
					$bathroom_products = display_products('baie');
					foreach ($bathroom_products as $bathroom_product) {
						echo 
						'<div class="product-wrapper">' .
							'<h4>Nume: ' . $bathroom_product->product_name . '</h4>' .
							'<img src="' . $bathroom_product->image_url . '">' .
							'<h4>Pret: ' . $bathroom_product->price . '</h4>' .
							'<h4>Vendor: ' . $bathroom_product->vendor . '</h4>' .
							'<a href="' . $bathroom_product->link . '">
								<span class="link-spanner"></span>
							</a>
						</div>';
					}
				?>
			</div>
		</div>

	</div>

	<script type="text/javascript" src="magazin.js"></script>
</body>
</html>