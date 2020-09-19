<?php

require_once('parametres/connexion.php');

if(!empty($_GET['serie'])) {
    $reqserie = $bdd->prepare('SELECT * FROM serie WHERE nom = ?');
    $reqserie->execute(array($_GET['serie']));
    $serieexist = $reqserie->rowCount();
    if($serieexist == 0) {
        header('location: film-série.php');
        exit();
    }
    $serie = $reqserie->fetch();
} else {
     header('location: film-série.php');
     exit();
 }
    
?>
<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
      <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="css/slide.css">
        <script src="https://kit.fontawesome.com/747acc35b5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="pages/pagecss.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="css/nav-bar-clic.css"/>
        
      <title>description film</title>
    </head>
    <body>
        <?php require_once('parametres/nav.php'); ?>
        <div class="serie">
            <img class="image1" src="img/film/<?= $serie['image1']; ?>">
            <h1><?= $serie['nom']; ?></h1>
            <img class="image2" src="img/film/<?= $serie['image2']; ?>">
            <div class="description">
                <?= nl2br($serie['description']); ?>
            </div>
            <div class="video">
                <?= $serie['video']; ?>
            </div>
        </div>
        
        <div class="lienretour">
                <a href="film-série.php"><i class="fas fa-arrow-alt-circle-left"></i> Retourner en arriere</a>
            </div>
    <?php require_once('parametres/footer.php'); ?>
      <div id="scroll" class="scroll">
        <a href="#top"><img src="../img/boutontop.png"/></a>
      </div>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
        <script src="js/slide.js"></script>
        <script src="js/scroll.js"></script>
        <script src="js/nav-bar-clic.js"></script>
        
        
  </body>
</html>