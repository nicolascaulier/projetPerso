<?php

require_once('parametres/connexion.php');

if(isset($_SESSION['ID'])) {
    header('location: profil.php');
    exit();
}

if(isset($_POST['login'])) {
    if(!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $login = $bdd->prepare('SELECT * FROM membre WHERE email = ?');
        $login->execute(array($email));
        $logininfos = $login->fetch();
        $_SESSION['ID'] = $logininfos['ID'];
        header('Location: profil.php');
        exit();
    } else {
        $message = "Veuillez renseigner votre adresse e-mail et votre mot de passe";
    }
}



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="connexion.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="css/nav-bar-clic.css"/>
	<script src="https://kit.fontawesome.com/747acc35b5.js" crossorigin="anonymous"></script>
    <title>connexion</title>
</head>
<body>
    <?php require_once('parametres/nav.php'); ?>
    <form method="POST">
        <label for="email">Inserez votre adresse email</label>
        <input type="email" name="email" id="email"/>
        <label for="password">insérez votre mot de passe !</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="login" value="je me connecte">
        <?php if(isset($message)) { echo $message; } ?>
    </form>
    <a href="inscription.php">Vous n'avez pas de compte ? Cliquez ici</a>
    <?php require_once('parametres/footer.php'); ?>
	<script src="js/slide.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/nav-bar-clic.js"></script>
    <script src="js/header.js"></script>
</body>
</html>