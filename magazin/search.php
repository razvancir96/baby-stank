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
			<h1>Magazinul Baby Stank - Jucarii</h1>
			<!-- search bar -->
			<form class="search-wrapper" action="search.php">
				<input class="search-input" type="search" name="search" placeholder="Cauta...">
				<button id="search-button" type="submit" name="submit"><div class="search-icon"></div></button>
			</form>
		</div>
		
		<!-- go back -->
		<div class="button-wrapper">
			<a class="go-back-button" href="magazin.php">Inapoi la categorii</a>
		</div>
		
		
		<?php 
			if (isset($_GET['submit'])) {
				$search_products = search_products($_GET['search']);
				if ($search_products) {
					echo '
					<div class="search-results">
						<h3>Rezultatele search-ului</h3>
						<div class="products">';
						foreach ($search_products as $search_product) {
							echo 
							'<div class="product-wrapper">' .
								'<h4>Nume:' . $search_product->product_name . '</h4>' .
								'<img src="' . $search_product->image_url . '">' .
								'<h4>Pret:' . $search_product->price . '</h4>' .
								'<h4>Vendor: ' . $search_product->vendor . '</h4>' .
								'<a href="' . $search_product->link . '">
									<span class="link-spanner"></span>
								</a>
							</div>';
						}
						echo '</div>
					</div>';
				} else {
					echo '<h3>Rezultatele search-ului</h3>
						<p class="excuse-us">Cautarea dumneavoastra nu a generat niciun rezultat. Va rugam sa incercati din nou!</p>';
				}	
			}
		?>
	</div>

</body>
</html>