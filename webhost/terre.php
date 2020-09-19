<?php require_once('parametres/connexion.php'); ?>
<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8"/>
      
      <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/slide.css">
      <link rel="stylesheet" type="text/css" href="terre.css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="css/navheader.css"/>
        <script src="https://kit.fontawesome.com/747acc35b5.js" crossorigin="anonymous"></script>
      <title>Terre</title>
    </head>
    <body>
        <?php require_once('parametres/nav.php'); ?>
        <div>
        <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 6</div>
                    <img src="pages/images/terre.jpg" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">2 / 6</div>
                    <img src="pages/images/terre01.jpg" style="width:100%">
                    <div class="text">jeux wtf</div>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">3 / 6</div>
                    <img src="pages/images/terre02.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>
                
                <div class="mySlides fade">
                    <div class="numbertext">4 / 6</div>
                    <img src="pages/images/terre03.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>
    
                <div class="mySlides fade">
                    <div class="numbertext">5 / 6</div>
                    <img src="pages/images/terre04.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
          </div>
          <div class="mySlides fade">
                    <div class="numbertext">6 / 6</div>
                    <img src="pages/images/terre05.jpg" style="width:100%">
                    <div class="text">Caption Three</div>
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
        </div>
    <section>
      <article>
        <div><h2>La Terre</h2></div>
        <h3>Les Origines</h3>
      <div class="jeux">
        <div class="test" data-aos="flip-left"><a href="#wow"><img src="pages/images/terre1.jpg"alt="wow"width="300px"height="300px"/>La Terre</a></div>

      </div>
      <p>
        <iframe width="900" height="500" src="https://www.youtube.com/embed/BCfz0K36j9g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="milieu">
        <p> La Terre est une planète du Système solaire, la troisième plus proche du Soleil et la cinquième plus grande, tant en taille qu'en masse, de ce système planétaire dont elle est également la plus massive des planètes telluriques.<br>
            La Terre s'est formée il y a 4.54 Milliards d'années environ, et la vie y est apparue moins d'un milliard d'années plus tard....
        </p>
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