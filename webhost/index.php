<?php
require_once('parametres/connexion.php');

if(isset($_SESSION['ID'])) {
    $userinfos = $bdd->prepare('SELECT * FROM membre WHERE ID = ?');
    $userinfos->execute(array($_SESSION['ID']));
    $userinfo = $userinfos->fetch();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="index.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="css/nav-bar-clic.css"/>
	<script src="https://kit.fontawesome.com/747acc35b5.js" crossorigin="anonymous"></script>
    <title>Accueil</title>
</head>
<body>
        <?php require_once('parametres/nav.php'); ?>
        <section>
         <div class="slideshow-container">
            <div class="mySlides fade">
				<div class="numbertext">1 / 5</div>
				<img src="img/pageaccueil.jpg" style="width:100%">
				<div class="text">Caption Text</div>
			</div>
			
		    <div class="mySlides fade">
				<div class="numbertext">2 / 5</div>
				<img src="img/pageaccueil1.jpg" style="width:100%">
				<div class="text">De l'eau bleu</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">3 / 5</div>
				<img src="img/pageaccueil2.jpg" style="width:100%">
                <div class="text">Caption Three</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <img src="img/pageaccueil3.jpg" style="width:100%">
                <div class="text">Caption four</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <img src="img/pageaccueil4.jpg" style="width:100%">
                <div class="text">Caption five</div>
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
        </div>
        <article>
        <h2>Accueil Nicolas Caulier</h2>
        <div class="flex">
          <div class="test" data-aos="fade-right"><a href="interet.php"><img src="img/hobbies.jpg"alt="hobbies"width="350px"height="200px"title="hobbies"class="film"/></a>centre d'interet</div>
          <div class="test" data-aos="zoom-in"><a href="formulaire.php"><img src="img/contact2.jpg"alt="serie"width="350px"height="200px"title="serie"class="serie"/></a>Formulaire</div>
          <div class="test" data-aos="zoom-in"><a href="jeux.php"><img src="img/jeuxvideo.jpg"alt="jeux"width="350px"height="200px"title="jeux"class="jeux"/></a>Jeux vidéo</div>
          <div class="test" data-aos="zoom-in"><a href="cv.php"><img src="img/cv.jpg"alt="science"width="350px"height="200px"title="science"class="science"/></a>CV</div>
          <div class="test" data-aos="zoom-in"><a href="morpion.php"><img src="img/morpion.jpg" width="350px" height="200px" class="jeux"/></a>Jeux Morpion</div>
          
        </div>
    </article>
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