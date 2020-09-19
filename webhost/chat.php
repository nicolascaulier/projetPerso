<?php

require_once('parametres/connexion.php');

if(isset($_POST['inscription'])) { /* Si l'utilisateur clique sur le bouton pour envoyer son pseudo, ce code s'execute */
    $pseudochat = htmlspecialchars($_POST['pseudo']); /* On sécurise l'input de l'utilisateur pour éviter l'injection de code */
    if(!empty($pseudochat)) {
        $_SESSION['pseudochat'] = $pseudochat; /* On dit au serveur d'injecter au navigateur de l'utilisateur un cookie*/
    }
}

if(isset($_POST['envoimessage'])) { /* Si l'utilisateur clique sur le bouton pour envoyer son message, ce code s'execute */
    $message = htmlspecialchars($_POST['message']); /* On sécurise l'input de l'utilisateur pour éviter l'injection de code */
    $envoimessage = $bdd->prepare('INSERT INTO chat(nom, message) VALUES(?, ?)'); /* Requête préparée PDO pour ajouter les input à la base de donnée */
    $envoimessage->execute(array($_SESSION['pseudochat'], $message)); /* Parametres passés et à inserer par la requête au dessus */
}

 /* Si l'utilisateur a bien entrer son pseudo, se code s'execute */
 if(isset($_SESSION['ID']) or isset($_SESSION['pseudochat'])) {
    $chat = $bdd->query('SELECT * FROM chat ORDER BY ID desc'); /* On dit au serveur d'executer une requete PDO non preparée et qui va aller chercher toutes les infos contenu dans la table chat de notre base de données*/
    
    /*Biensur on peut limiter le nombre de message affichés en ajoutant un ordre "LIMIT 0, 10 à la fin de la requete si on veut par exemple n'afficher que les 10 derniers messages */
}

if(isset($_GET['deconnexion'])) { /* Si l'utilisateur clique sur le lien de déconnexion, se code s'execute */
    unset($_SESSION['pseudochat']); /* On efface la variable de session de l'utilisateur pour le déconnecter du chat*/
    /* Ici le truc c'est qu'on pourrait être tenté de faire: $_SESSION['pseudochat'] = ''; mais le problème c'est que cette variable existerait toujours, même si elle est vide et l'utilisateur resterais connecté et aurais un pseudo qui est vide */
    
    header('location: chat.php'); /* On envoie l'utilisateur sur une autre page pour le deconnecter complètement de la chatbox */
}
?>
<!doctype html>
<html>
    <head>
        <title>Cours PHP</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/slide.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="connexion.css"/>
        <link rel="stylesheet" href="css/nav-bar-clic.css"/>
        <script src="https://kit.fontawesome.com/747acc35b5.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php require_once('parametres/nav.php'); ?>
        <div class="profil">
            <?php if(isset($_SESSION['ID'])) { $_SESSION['pseudochat'] = $userinfos['pseudo']; } ?>
            <?php if(!isset($_SESSION['pseudochat'])) { ?> <!-- On demande au serveur d'afficher ce bout de code si la condition qui vérifie si la variable existe est fausse -->
                <form method="post" action="">
                    <label for="pseudo">Entrez votre pseudo:</label> <!-- Petit truc: les label sont très cool quand il s'agit d'améliorer l'accessibilité de ton site. Ils permettent aux synthese vocales si elles sont activées de lire l'intitulé de ce que tu auras placé dans le label si l'utilisateur clique sur le champ qui y est relié. ET EN PLUS: si tu clique sur l'intitulé du label, tu peux directement taper dans l'input sans avoir a cliquer dessus. -->
                    <input name="pseudo" id="pseudo"/>
                    <input type="submit" name="inscription" value="Connexion au chat"/>
                </form>
            <?php } else { ?> <!-- Si elle existe ce bout de code s'affiche à la place -->
                <form method="post" action="">
                    <label for="message">Entrer votre message:</label>
                    <input name="message" id="message"/>
                    <input type="submit" name="envoimessage" value="Envoyer mon message"/>
                </form>
                <div class="chat"> <!-- La div qui contient la chatbox -->
                    <?php while($chatmsg = $chat->fetch()) { ?> <!-- Boucle de code qui va s'occuper d'afficher touts les messages de la façon qu'on lui ordonne dans la condition. Ici le fetch correspond à une instruction PDO qui va dire que chaque ligne doit être affichée.-->
                    <div class="message"> <!-- Ici j'ai créer une div pour chaque message, dans le but de mettre un peu de style (flex) à ma div chat pour que les messages s'affiche les un en dessous des autres -->
                        <?= $chatmsg['nom']; ?> a dit: <?= $chatmsg['message']; ?> <!-- structure d'une ligne dans le chat -->
                    </div>
                    <?php } ?> <!-- Fermeture de la boucle qui affiche les messages -->
                </div>
                <?php if(!isset($_SESSION['ID'])) { ?>
                <div class="deconnexion">
                    <a href="chat.php?deconnexion=1">Cliquez ici pour vous déconnecter</a> <!-- Lien pour se déconnecter. (On pourrais aussi le faire via un formulaire et un simple bouton de type submit) -->
                </div>
                <?php } ?>
            <?php } ?> <!-- Fermeture de la boucle qui exécute du code si la condition est vraie -->
        </div>
        <script src="js/slide.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/nav-bar-clic.js"></script>
    <?php require_once('parametres/footer.php'); ?>
    </body>
</html>