<?php require_once('parametres/connexion.php'); ?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet"href="lagrandguerre.css"/>
    <link rel="stylesheet" href="css/nav-bar-clic.css"/>
    <script src="https://kit.fontawesome.com/747acc35b5.js" crossorigin="anonymous"></script>
    <title>La Grande Guerre</title>
 </head>
 <body>
    <?php require_once('parametres/nav.php'); ?>
    <section>
      <div id="banner">
        <div class="content">
            <h1>La Grande Guerre</h1>
         </div>
    </div>
        <article>
        <div><h2>Sommaire</h2></div>
        <div class="flex">
          <div><a href="#1914"><img src="img/1erguerre.jpg"alt="1erguerre"width="350px"height="250px"title="1er guerre mondiale"class="1erguerre"/></a>1914-1918</div>
          <div><a href="#apo"><img src="img/verdun2.jpg"alt="tranchée"width="350px"height="250px"title="Apocalypse"class="1erguerre"/></a>Apocalypse l'Enfer</div>
          <div><a href="#chemin"><img src="img/tranchée.jpg"alt="tranchée"width="350px"height="250px"title="chemin des dames"class="1erguerre"/></a>Le Chemin Des Dames</div>
          <div><a href="#verdun"><img src="img/verdun1.jpg"alt="verdun"width="350px"height="250px"title="verdun"class="1erguerre"/></a>Verdun</div>
          <div><a href="#somme16"><img src="img/somme2.jpg"alt="tranchée"width="350px"height="250px"title="la Somme"class="1erguerre"/></a>La Sommme 1916</div>
          <div><a href="#somme18"><img src="img/tranchée10.jpg"alt="histoire"width="350px"height="250px"title="histoire"class="histoire"/></a>La Somme 1918</div>
        </div>
        </article>
        <div class="description">
            <div><h2>évenement</h2></div>
        </div>
          <div><h3 id="1914"> 1914-1918</h3></div>
          <div class="flex2">
            <div><img src="img/tranchée.jpg"alt="tranchée"width="300"height="200"/></div>
            <div><img src="img/tranchée1.jpg"alt="tranchée1"width="300"height="200"/></div>
            <div><img src="img/tranchée2.png"alt="tranchée2"width="300"height="200"/></div>
          </div>
          <iframe width="600" height="300" src="https://www.youtube.com/embed/WguE1pOoONQ" frameborder="0" class="milieu" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           <div><h3 id="apo">Apocalype l'Enfer</h3></div>
           <div class="flex2">
            <div><img src="img/tranchée4.jpg"alt="tranchée"width="300"height="200"/></div>
            <div><img src="img/tranchée5.jpg"alt="tranchée1"width="300"height="200"/></div>
            <div><img src="img/tranchée6.jpg"alt="tranchée2"width="300"height="200"/></div>
          </div>
           <iframe width="600" height="300" src="https://www.youtube.com/embed/NcIo0YyLp_A" frameborder="0" class="milieu" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <div><h3 id="chemin">Le Chemin Des Dames</h3></div>
          <div class="flex2">
            <div><img src="img/tranchée7.jpg"alt="tranchée"width="300"height="200"/></div>
            <div><img src="img/tranchée8.jpg"alt="tranchée1"width="300"height="200"/></div>
            <div><img src="img/tranchée9.jpg"alt="tranchée2"width="300"height="200"/></div>
          </div>
         <iframe width="600" height="300" src="https://www.youtube.com/embed/pchun8eY5xs" frameborder="0" class="milieu" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div><h3 id="verdun">Verdun</h3></div>
        <div class="flex2">
            <div><img src="img/verdun3.jpg"alt="tranchée"width="300"height="200"/></div>
            <div><img src="img/verdun1.jpg"alt="tranchée1"width="300"height="200"/></div>
            <div><img src="img/verdun2.jpg"alt="tranchée2"width="300"height="200"/></div>
          </div>
         <iframe width="600" height="300" src="https://www.youtube.com/embed/2LnVMEKKTHw" frameborder="0" class="milieu" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div><h3 id="somme16">bataille de la Somme 1916</h3></div>
        <div class="flex2">
            <div><img src="img/somme3.jpg"alt="tranchée"width="300"height="200"/></div>
            <div><img src="img/somme4.jpg"alt="tranchée1"width="300"height="200"/></div>
            <div><img src="img/tranchée9.jpg"alt="tranchée2"width="300"height="200"/></div>
          </div>
        <iframe width="600" height="300" src="https://www.youtube.com/embed/0s0yl7D1rVE" frameborder="0" class="milieu" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         <div><h3 id="somme18">La bataille de la Somme 1918</h3></div>
         <div class="flex2">
            <div><img src="img/tranchée10.jpg"alt="tranchée"width="300"height="200"/></div>
            <div><img src="img/char1.jpg"alt="tranchée1"width="300"height="200"/></div>
            <div><img src="img/somme2.jpg"alt="tranchée2"width="300"height="200"/></div>
          </div>
        <iframe width="600" height="300" src="https://www.youtube.com/embed/8JDmobq4nZ0" frameborder="0" class="milieu" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></iframe>
        <div class="lienretour">
                <a href="histoire.php"><i class="fas fa-arrow-alt-circle-left"></i> Retour à la page Histoire</a>
            </div>
        </section>
    <?php require_once('parametres/footer.php'); ?>
    <div id="scroll" class="scroll">
        <a href="#top"><img src="img/boutontop.png"/></a>
    </div>
    <script src="js/scroll.js"></script>
    <script src="js/nav-bar-clic.js"></script>
    
  </body>
</html>
