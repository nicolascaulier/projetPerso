<?php require_once('parametres/connexion.php'); ?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet"href="histoire.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/nav-bar-clic.css"/>
    <script src="https://kit.fontawesome.com/747acc35b5.js" crossorigin="anonymous"></script>
    <title>Histoire</title>
 </head>
 <body>
    <?php require_once('parametres/nav.php'); ?>
    <section>
         <div class="slideshow-container">
            <div class="mySlides fade">
				<div class="numbertext">1 / 5</div>
				<img src="img/histoire.jpg" style="width:100%">
				<div class="text">Caption Text</div>
			</div>
			
		    <div class="mySlides fade">
				<div class="numbertext">2 / 5</div>
				<img src="img/histoire1.jpg" style="width:100%">
				<div class="text">De l'eau bleu</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">3 / 5</div>
				<img src="img/histoire2.jpg" style="width:100%">
                <div class="text">Caption Three</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <img src="img/histoire3.jpg" style="width:100%">
                <div class="text">Caption four</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <img src="img/histoire4.jpg" style="width:100%">
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
          <h2>Histoire</h2>
          <aside class="content-flex">
            <div class="flex">
              <div class="test" data-aos="fade-right"><a href="lagrandeguerre.php"><img src="img/1erguerre.jpg"alt="1erguerre"width="300px"height="200px"title="1er guerre mondiale"class="1erguerre"/></a>1er guerre mondiale</div>
              <div class="test" data-aos="zoom-in"><a href="deuxiemeguerremondiale.php"><img src="img/2emguerre.jpg"alt="2emguerre"width="300px"height="200px"title="2em guerre mondiale"class="2emguerre"/></a>2em guerre mondial</div>
              <div class="test" data-aos="zoom-in"><a href="science.php"><img src="img/science.jpg"alt="science"width="300px"height="200px"title="science"class="science"/></a>achéologie</div>
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