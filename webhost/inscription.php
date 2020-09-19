<?php require_once('parametres/connexion.php');

if(isset($_POST['inscription'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password2 = htmlspecialchars($_POST['password2']);
if($password2 === $password) {
    $inscription = $bdd->prepare('INSERT INTO membre(pseudo,email,password) VALUES(?,?,?)');
    $inscription->execute(array($pseudo,$email, $password));
    $message = "Votre inscription a bien été prise en compte";
} else {
    $message = "vos mots de passes doivent être identiques";
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
    <title>Inscription</title>
</head>
<body>
    <?php require_once('parametres/nav.php'); ?>
    <form method="POST">
        <label for="pseudo">Insérez votre pseudo !</label>
        <input type="text" name="pseudo" id="pseudo">
        <label for="email">Veuillez insérer votre adresse email !</label>
        <input type="email" name="email" id="email"/>
        <label for="password">Veuillez insérer votre mot de passe !</label>
        <input type="password" name="password" id="password">
        <label for="password2">Veuillez confirmer votre mot de passe !</label>
        <input type="password" name="password2" id="password2">
        <input type="submit" name="inscription" value="je m'inscrit!" >
        <?php if(isset($message)) { echo $message; } ?>
    </form>
    <?php require_once('parametres/footer.php'); ?>
	<script src="js/slide.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/nav-bar-clic.js"></script>
    
</body>
</html>