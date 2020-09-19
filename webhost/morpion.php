<?php require_once('parametres/connexion.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
         <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/slide.css">
        <link rel="stylesheet" type="text/css" href="morpion.css">
        <link rel="stylesheet" href="css/nav-bar-clic.css"/>
        <script src="https://kit.fontawesome.com/747acc35b5.js" crossorigin="anonymous"></script>
        <title>Morpion</title>
    </head>
    <body>
        <?php require_once('parametres/nav.php'); ?>
        <section>
            <article>
                
                <div class="milieu">
                <h2>Le jeu du morpion</h2>
                <canvas id="canvasMorpion" width="500" height="500" style="background-color:black;"></canvas>
                <h3 id="joueur">Au joueur de placer une croix</h3>
                
                </div>
                <div class="lienretour">
                <a href="morpion.php"><i class="fas fa-arrow-alt-circle-left"></i>Recommencer la partie</a>
            </div>
                <div class="lienretour">
                <a href="interet.php"><i class="fas fa-arrow-alt-circle-left"></i> Retour à la page Mes Loisirs</a>
            </div>
            </article>
        </section>
        <?php require_once('parametres/footer.php'); ?>
        <div id="scroll" class="scroll">
            <a href="#top"><img src="../img/boutontop.png"/></a>
        </div>
        <script src="js/scroll.js"></script>
        <script src="js/morpion.js"></script>
        <script src="js/nav-bar-clic.js"></script>
    </body>

</html>