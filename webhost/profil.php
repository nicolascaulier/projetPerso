<?php 

require_once('parametres/connexion.php');

if(!isset($_SESSION['ID'])) {
    header('location: connexion.php');
    exit();
}

if(isset($_GET['deconnexion'])) {
    session_destroy();
    header('location: connexion.php');
}

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/slide.css">
        <link rel="stylesheet" href="inscription.css"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	    <link rel="stylesheet" href="css/nav-bar-clic.css"/>
	    <script src="https://kit.fontawesome.com/747acc35b5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="profil.css">
    </head>
    <body>
      <?php require_once('parametres/nav.php'); ?>
      <form>
        <h1>Bienvenue utilisateur n°<?= $_SESSION['ID']; ?></h1>
        <?php echo $userinfos['pseudo']; ?>
        <h2>Votre adresse e-mail est : <?= $userinfos['email']; ?></h2>
        <a href="chat.php">Accéder à la tchatbox</a>
        <a href="profil.php?deconnexion">Se déconnecter</a>
      </form>
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