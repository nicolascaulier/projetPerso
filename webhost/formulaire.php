<?php require_once('parametres/connexion.php');

if(isset($_POST['mailform'])) {
  $email = htmlspecialchars($_POST['mail']);
  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $message = htmlspecialchars($_POST['message']);
  if(!empty($_POST['mail']) and !empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['message'])) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $messagelength = strlen($message);
      if($messagelength >=10) {
        $insertionbasededonnées = $bdd->prepare('INSERT INTO formulaire(nom, prenom, email, message) VALUES (?,?,?,?)');
        $insertionbasededonnées->execute(array($nom, $prenom, $email, $message));
        $confirmation = "Vos données ont bien été récupérées et enregistrées. Merci d'avoir utiliser notre formulaire";
      } else {
        $erreur ="Votre message est trop court !";
      }
    } else {
      $erreur = "Votre adresse e-mail n'est pas valide !";
    }
  } else {
    $erreur = "Touts les champs doivent être complétés !";
  }
}

?>


<DOCTYPE html>
  <html lang="fr">
      <head>
          <meta charset="utf-8"/>
          <link rel="stylesheet" href="css/normalize.css">
          <link rel="stylesheet"href="formulaire.css"/>
          <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
          <link rel="stylesheet" href="css/nav-bar-clic.css"/>
          <script src="https://kit.fontawesome.com/747acc35b5.js" crossorigin="anonymous"></script>
          <title>Contact</title>
      </head>
      <body>
          <?php require_once('parametres/nav.php'); ?>
            <div id="banner">
              <div class="formulaire">
                  <h1>Formulaire</h1>
                  </div>
                </div>
            <section>
              <article>
                  <h2>formulaire de contact</h2>
                  <div class="formul">
                  <div>
                  <form method="POST" action="#">
                  <p><label>Quel est votre nom?</label></p>
                  <input type="text" name="nom" id="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
                  <p><label>Quel est votre prénom?</label></p>
                  <input type="text" name="prenom" id="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>"/>
                  <p><label>Quel est votre adresse mail?</label></p>
                  <input type="mail" name="mail" id="mail" value="<?php if(isset($email)) { echo $email; } ?>"/>
                  </div>
                  <div data-aos="zoom-in" class="divimg"><img src="img/contact2.jpg"></div>
                  </div>
                  <p><label>Insérez ici votre message:</label></p>
                  <textarea type="text" id="message" name="message" placeholder="écrivez-ici" rows="10" cols="100" value="<?php if(isset($message)) { echo $message; } ?>"></textarea>
                  <p><input type="submit" name="mailform" value="Envoyer"/></p>
                  </form>
<?php if(isset($confirmation)) { ?> <div class="confirmation"><?= $confirmation ?><div><?php } ?>
<?php if (isset($erreur)) { ?> <div class="erreur"><?= $erreur ?></div> <?php } ?>
             </article>
          </section>
          <?php require_once('parametres/footer.php'); ?>
            <div class="scroll">
              <a href="#top"><img src="img/boutontop.png"/></a>
            </div>
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	        <script>AOS.init();</script>
            <script src="js/scroll.js"></script>
            <script src="js/nav-bar-clic.js"></script>
            
      </body>
  </html>