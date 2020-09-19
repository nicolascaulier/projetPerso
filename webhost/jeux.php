<?php require_once('parametres/connexion.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
  
  <link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/slide.css">
  <link rel="stylesheet" type="text/css" href="jeux.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="css/nav-bar-clic.css"/>
	<script src="https://kit.fontawesome.com/747acc35b5.js" crossorigin="anonymous"></script>
  <title>Jeux-vidéos</title>
</head>
<body>
    <?php require_once('parametres/nav.php'); ?>
    <div>
    <div class="slideshow-container">
			<div class="mySlides fade">
				<div class="numbertext">1 / 6</div>
				<img src="img/jeuxvid1.jpg" style="width:100%">
				<div class="text">Caption Text</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">2 / 6</div>
				<img src="img/jeuxvid2.jpg" style="width:100%">
				<div class="text">jeux wtf</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">3 / 6</div>
				<img src="img/jeuxvid3.jpg" style="width:100%">
				<div class="text">Caption Three</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">4 / 6</div>
				<img src="img/battlefront.jpg" style="width:100%">
				<div class="text">Caption Three</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">5 / 6</div>
				<img src="img/jeuxvid4.jpg" style="width:100%">
				<div class="text">Caption Three</div>
      </div>
      <div class="mySlides fade">
				<div class="numbertext">6 / 6</div>
				<img src="img/bf510.jpg" style="width:100%">
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
    <div class="container" id="video">
      <div class="video">
          <img src="img/croix.jpg" width="5%" onclick="hide()" />
          <iframe width="500" height="350" src="https://www.youtube.com/embed/1K_lAx4JlL4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>></iframe>
      </div>
  </div>
  <section>
      <aside>
        <div class="licence">
            <div class="test" data-aos="fade-left"><a href="#blizzard"><img src="img/blizzard.jpg" alt="blizzard" title="blizzard" width="190px" height="150px"/></a></div>
            <div class="test" data-aos="fade-left"><a href="#ea"><img src="img/ea.jpg" alt="ea" width="190px" height="150px"/>EA</a></div>
            <div class="test" data-aos="fade-left"><a href="#Dice"><img src="img/dice.jpg" width="190px" height="150px"/>Dice</a></div>
          </div>
      </aside>
      <article>
          <div><h2>jeux-vidéos</h2></div>
          <h3>mon top jeux</h3>
        <div class="jeux">
            <div class="test" data-aos="flip-left"><a href="#wow"><img src="img/wow.jpg"alt="wow"width="350px"height="200px"/>World of warcraft</a></div>
            <div class="test" data-aos="flip-up"><a href="#warcraft"><img src="img/warcraft.jpg" alt="warcraft"width="350px"height="200px"/>Warcraft</a></div>
            <div class="test" data-aos="flip-right"><a href="#diablo"><img src="img/diablo.jpg"alt="diablo"width="350px" height="200px"/>Diablo</a></div>
            <div class="test" data-aos="flip-left"><a href="#starcraft"><img src="img/starcraft.jpg"alt="starcraft"width="350px"height="200px"/>Starcraft</a></div>
            <div class="test" data-aos="flip-up"><a href="#leagueoflegend"><img src="img/league.jpg"alt="league"width="350px"height="200px"/>League of legend</a></div>
            <div class="test" data-aos="flip-right"><a href="#fallenorder"><img src="img/fallenorder.jpg"width="350px"height="200px"/>Jedi Fallen Order</a></div>
            <div class="test" data-aos="flip-left"><a href="#starswars"><img src="img/starswarsbattlefront.jpg"alt="sw"width="350px"height="200px"/>Stars-wars</a></div>
            <div class="test" data-aos="flip-up"><a href="#bf1"><img src="img/bf1.jpg"alt="bf1"alt="bf1"width="350px"height="200px"/>battlefield 1</a></div>
            <div class="test" data-aos="flip-right"><a href="#bf5"><img src="img/battlef5.jpg"alt="bf5"width="350px"height="200px"/>battlefield V</a></div>
        </div>
      
        <div class="description">
            <div><h2>référentiel jeux</h2></div>
            </div>
            <div class="flex-jeux">
                <div><h3 id="wow">World Of Warcraft</h3></div>
                <img class="carrousel3" src="img/wow10a.jpg" width="50%">
                <img class="carrousel3" src="img/wow11a.jpg" width="50%">
                <img class="carrousel3" src="img/wow12a.jpg" width="50%">
                <img class="carrousel3" src="img/wow13a.jpg" width="50%">
                <img class="carrousel3" src="img/wow15a.jpg" width="50%">
            
                <p><iframe data-aos="zoom-in-up" width="600" height="300" class="droite" src="https://www.youtube.com/embed/4ust2kgtvD8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>World Of Warcraft est un jeu de rôle en ligne massivement multijoueur (MMORPG) sorti en 2004 par Blizzard Entertainment.
                    Il s'agit du quatrième jeu sorti dans l'univers fantastique de Warcraft. WoW se déroule dans le
                    monde d'Azeroth, ou il y règne un conflit entre plusieurs race, les humains, elfs torrens et orcs,
                    qui se disputent le territoire...</p>
                    <p><a href="https://worldofwarcraft.com/fr-fr/character/eu/ysondre/ahrius" target="blank">Voici le liens vers wow armurerie </a> Mon avatar: Ahrius paladin lvl 120 </p>
                    <p><img src="img/Ahrius.jpg" width="600" height="350"></p>
                <div><h3 id="warcraft">Warcraft reforged</h3></div>   
                <p><iframe data-aos="zoom-in-up" width="600" height="300" class="droite" src="https://www.youtube.com/embed/CFmY3OgBu70" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>bande annonce de Warcraft est une édition remasterisée du jeu vidéo de stratégie, sortie en 2020. Warcraft est une jeu de stratégie,fantastique. </p>
                <div><h3 id="diablo">Diablo</h3></div>
                <p><iframe data-aos="zoom-in-up" width="600" height="300" class="droite" src="https://www.youtube.com/embed/DaG4-zOWcXg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>Diablo est un jeux de type hack'n slash développé par Blizzard. Diablo se déroule dans un univers médiéval-fantastique dans lequel le joueur explore des donjons peuplés de créatures que vous devez combattre pour gagner de l'expérience et des trésors, l'objectif du jeu étant de trouver Diablo et de le tuer.</p>
                <div><h3 id="starcraft">Starcraft</h3></div>
                <p><iframe data-aos="zoom-in-up" width="600" height="300" class="droite" src="https://www.youtube.com/embed/D1VZtYiSZSc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>Starcraft est un jeu vidéo de stratégie en temps réel, développé par Blizzard Entertainment. Le jeu prend place au XXVIem siècle et relate les affrontements entre trois espèces distinctes pour la domination d'une zone de la voie lactée connue sous le nom de Secteur Koprulu.</p>
                <div><h3 id="leagueoflegend">League Of Legends</h3></div>
                <p><iframe data-aos="zoom-in-up" width="600" height="300" class="droite" src="https://www.youtube.com/embed/p2dTpDhLFQ4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>League Of Legends est un jeu d'arène de combat en ligne multijoueur développé et publié par Riot Games. Les joueurs jouent le rôle d'un champion avec des capacités uniques et se battent contre une équipe d'autres joueurs, le but est de détruire le "Nexus" de l'équipe adverse, une structure qui se trouve au centre d'une base protégée par des bâtiments défensives...</p>
                <div><h3 id="fallenorder">Stars Wars Fallen Order</h3></div>
                <p><iframe data-aos="zoom-in-up" width="600" height="300" class="droite" src="https://www.youtube.com/embed/C7ZfLMnMn7o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>Stars Wars Jedi Fallen Order est un jeu d'action-aventure développé par Respawn Entertainment et publié par Electronic Arts. L'histoire suit un jeune Jedi Padawan nommé Cal Kestis alors qu'il est chassé à travers la galaxie par l'Empire Galactique, out en essayant de terminer sa formation Jedi et de restaurer l'ordre Jedi maintenant anéanti...</p>
                <div><h3 id="bf1">Battlefield 1</h3></div>
                <img class="carrousel2" src="img/bf10.jpg" width="500px">
                <img class="carrousel2" src="img/bf11.jpg" width= "500px">
                <img class="carrousel2" src="img/bf12.jpg" width="500px">
                <img class="carrousel2" src="img/bf13.jpg" width="500px">
                <p><iframe data-aos="zoom-in-up" width="600" height="300" class="droite" src="https://www.youtube.com/embed/soGeowHi4kA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>Battlefield 1 est un FPS développé par EA Dice et publié par Electronic Arts. L'histoire se déroule pendant la Première Guerre mondiale et s'inspire 'évènements, et de batailles historiques...  </p>
                <div><h3 id="bf5">Battlefield 5</h3></div>
                <p><iframe data-aos="zoom-in-up" width="600" height="300" class="droite"src="https://www.youtube.com/embed/LCZLabOywYU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>Battlefield 5 est un FPS développé aussi par EA Dice et publié par Electronic Arts. Le jeux est la suite de du context historique de BF1, il se déroule pendant la deuxième guerre mondiale, la bande annonce qui suit se déroule pendant la guerre du pacifique qui oppose les USA face Japonnais...</p>
                <p><iframe width="600" height="300" class="droite" src="https://www.youtube.com/embed/bcUr3JDrl8o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>L'extrait qui suit est un montage que j ai réalisé sur mon gameplay sur bf5 avec les musiques du jeux .</p>
                <p><a href="https://www.youtube.com/results?search_query=steelux2610" target="blank">Cliquer ici pour accéder à Ma chaine Youtube </a></p>
            </div>
            <div class="lienretour">
                <a href="interet.php"><i class="fas fa-arrow-alt-circle-left"></i> Retour à la page Mes Loisirs</a>
            </div>
      </article>
      <article>
        <div class="other-licence">
            <div class="test" data-aos="fade-right"><a href="#activision"><img src="img/activision.jpg"alt="activision"width="190px"height="150px"/>activision</a></div>
            <div class="test" data-aos="fade-right"><a href="#mooton">mooton</a></div>
            <div class="test" data-aos="fade-right"><a href="#frostbite"><img src="img/frostbite.jpg"width="190px"height="150px"/>frocebit</a></div>
            <div class="test" data-aos="fade-right"><a href="#riot"><img src="img/riot.jpg"width="190px"height="150px"/>Riot</a></div>
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
      <script src="js/slide3.js"></script>
      <script src="js/nav-bar-clic.js"></script>
      <script>
          function hide() {
              document.getElementById("video").style.display="none";
          }
      </script>
 </body>
</html>