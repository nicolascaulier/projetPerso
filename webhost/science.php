<?php require_once('parametres/connexion.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/slide.css">
	<link rel="stylesheet"href="science.css"/>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="css/nav-bar-clic.css"/>
	<script src="https://kit.fontawesome.com/747acc35b5.js" crossorigin="anonymous"></script>
	<title>Science</title>
</head>
<body>
	<<?php require_once('parametres/nav.php'); ?>
	<section>
		<div class="slideshow-container">
			<div class="mySlides fade">
				<div class="numbertext">1 / 6</div>
				<img src="img/espace.jpg" style="width:100%">
				<div class="text">Caption Text</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">2 / 6</div>
				<img src="img/espace1.jpg" style="width:100%">
				<div class="text">espace</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">3 / 6</div>
				<img src="img/science3.jpg" style="width:100%">
				<div class="text">Caption Three</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">4 / 6</div>
				<img src="img/espace2.jpg" style="width:100%">
				<div class="text">Caption Three</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">5 / 6</div>
				<img src="img/espace3.jpg" style="width:100%">
				<div class="text">Caption Three</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">6 / 6</div>
                <img src="img/espace4.jpg" style="width:100%">
                <div class="text">Caption six</div>
            </div>
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>
		
		<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
			<span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
		</div> 
		<article>
			<h2>Sciences</h2>
			<aside class="content-flex">
				<div class="flex">
					<div class="test" data-aos="flip-up"><a href="#"><img src="img/pulsar.jpg"alt="pulsar"width="300px"height="200px"title="univers"class="univers"/></a>l'univers</div>
          <div class="test" data-aos="flip-up"><a href="terre.php"><img src="img/terre.jpg"alt="terre"width="300px"height="200px"title="science"class="science"/></a>origine de la terre</div>
          <div class="test" data-aos="flip-up"><a href="#"><img src="img/histoire.php"alt="histoire"width="300px"height="200px"title="histoire"class="histoire"/></a>nature</div>
          <div class="test" data-aos="flip-up"><a href="#"><img src="img/science.php" alt="espace"width="300px" height="200px" title="animaux" class="animaux"/></a>archéologie</div>
               
        </div>
			</aside>
		</article>
		<div class="lienretour">
                <a href="interet.php"><i class="fas fa-arrow-alt-circle-left"></i> Retour à la page Mes Loisirs</a>
            </div>
	</section>
	<?php require_once('parametres/footer.php'); ?>
	
	<div id="scroll" class="scroll">
		<a href="#top"><img src="img/boutontop.png"/></a>
	</div>
	
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>AOS.init();</script>
	<script src="js/slide.js"></script>
	<script src="js/scroll.js"></script>
	<script src="js/nav-bar-clic.js"></script>

</body>
</html>