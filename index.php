<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Baby Stank</title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Margarine" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php require_once 'navbar.html' ?>
	<main class="content">

		<div class="baby-songs">
			<h1>Baby songs</h1>
			<p>Bebelușul tău adora sa asculte muzică! Youtube-ul este plin de canale care îți oferă cantecelele potrivite pentru bebelușul tău. Descopera pe site-ul nostru cele mai populare canale de youtube pentru el. </p>
			<h2>Cântecelul săptamânii:</h2>
			<div class="iframe-wrapper">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/40LZ_VG0pSE" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

		<div class="keep-him-busy">
			<h1>Ține-l ocupat!</h1>
			<p>Atunci cand copiașii sunt mici, au cea mai mare putere de asimilare a informației. Cu cât face mai multe activități, cu atât învață mai multe! Ritmul în care se dezvoltă e unul alert, iar iar noi îți dăm idei de petrecere a timpului alături de el.</p>
			<h2>Magic Draw</h2>
			<p>Desenează alături de copilul tău!</p>
			<p>Dă click pe una dintre culori pentru a o selecta. Apoi, în spațiul alb, ținând apăsat pe mouse, desenați cu respectiva culoare. Distracție plăcută!</p>

			<!-- <div class="canvas-wrapper">
				<div class="canvas-grid">
					<div class="red square"></div>
					<div class="green square"></div>
					<div class="blue square"></div>
					<div class="yellow square"></div>
					<div class="pink square"></div>
					<div class="orange square"></div>
					<div class="purple square"></div>
					<div class="black square"></div>	
				</div>
				<canvas class="canvas" width="560" height="315" display="block">
				</canvas>
			</div> -->
			<div class="register-link not-logged-in main-button">
				<a href="deseneaza/deseneaza/php">Deseneaza</a>
			</div>
		</div>

		<div class="magazin">
			<h1>Magazin</h1>
			<p>Oferă-i copilului tău ce e mai bun. <a href="magazin/magazin.php">Magazinul</a> nostru conține o gamă variată de produse: de la produse pâna la accesorii si jucării. Alege ce e cel mai potrivit pentru copilul tău! </p>
			<h2>Jucării:</h2>
			<div class="toys-container">
				<div class="toy" id="toy1">
					<h3 class="up">Floricica veselă</h3>
					<img src="https://noriel.ro/media/catalog/product/cache/ed9f5ebe2a117625f6cd6336daddd764/p/a/papusa_vesela_1.jpg" alt="Loading...">
					<h3 class="down">Pret: 70RON</h3>
				</div>
				<div class="toy" id="toy2">
					<h3 class="up">Catelul Bimbo</h3>
					<img src="https://noriel.ro/media/catalog/product/cache/ed9f5ebe2a117625f6cd6336daddd764/j/u/jucarie-bebelusi-noriel-bebe-catel-inteligent.jpg" alt="Loading...">
					<h3 class="down">Pret: 80RON</h3>
				</div>
				<div class="toy" id="toy3">
					<h3 class="up">Minge puzzle</h3>
					<img src="https://noriel.ro/media/catalog/product/cache/ed9f5ebe2a117625f6cd6336daddd764/j/u/jucarie-bebelusi-b-kids-minge-puzzle.jpg" alt="Loading...">
					<h3 class="down">Pret: 50RON</h3>
				</div>
				<div class="toy" id="toy4">
					<h3 class="up">Laptop karaoke</h3>
					<img src="https://noriel.ro/media/catalog/product/cache/ed9f5ebe2a117625f6cd6336daddd764/l/a/laptop-karaoke-noriel-computerul-testoasa_2.jpg" alt="Loading...">
					<h3 class="down">Pret: 250RON</h3>
				</div>
				<div class="toy">
					<h3><a href="magazin/magazin.php">Vezi toate produsele</a></h3>
					<img src="https://cdn.shopify.com/s/files/1/1061/1924/products/Wink_Emoji_large.png?v=1480481060" alt="Loading...">
				</div>
			</div>
		</div>
	</main>

	<footer class="footer">
		<div class="footer-container-1">
			<div class="contact">
				<h1>Contact</h1>
				<p><strong>Email:</strong> baby.stank@gmail.com<p>
				<p><strong>Telefon:</strong> +40722828384</p>
			</div>
			<div class="social-media">
				<h1>Social media</h1>
				<div class="facebook">
					<div class="image-wrapper">
						<img src="media/facebook.png" alt="Loading">
					</div>
					<p><a href="https://www.facebook.com/KidexBabyBoom/">Baby Stank</a></p>
				</div>
				<div class="instagram">
					<div class="image-wrapper">
						<img src="media/instagram.png" alt="Loading">
					</div>
					<p><a href="https://www.instagram.com/just.baby/">@baby_stank</a></p>
				</div>
			</div>
			<div class="legal-terms">
				<h1>Legal terms</h1>
				<p>Terms and conditions</p>
				<p>Privacy</p>
				<p>Legal note</p>
			</div>
		</div>

		<div class="footer-container-2">
			<div class="subscribe">
				<p>Vrei să primești informații lunar?</p>
				<div class="button-wrapper">
					<a class="subscribe-button" href="#">Abonează-te!</a>
				</div>
				<div class="final-one"></div>
			</div>
			<div class="copyright">
				&copy;
				<p>Răzvan Cîrlugea 2019</p>
			</div>
		</div>

	</footer>

	<script type="text/javascript" src="script.js"></script>
</body>
</html>