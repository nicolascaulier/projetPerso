<?php
require "import.php";


spl_autoload_register('chargerClasse');

$perso = new Personnage;
//$perso->parler();
//$perso->gagnerExperience();
//$perso->afficherExperience();

//echo ($perso->_experience +1);
$perso1 = new Personnage;
$perso2 = new Personnage;

$perso1->frapper($perso2);
$perso1->gagnerExperience();

$perso2->frapper($perso1);
$perso2->gagnerExperience();

$perso1->setForce(50);
$perso1->getForce();


$perso1->setExperience(2);

$perso2->setForce(90);

$perso2->setExperience(58);

$perso1->frapper($perso2);
$perso1->gagnerExperience();

$perso2->frapper($perso1);
$perso2->gagnerExperience();

echo $perso1->force(),"<br>", $perso2->force();
echo "<br>";
echo $perso1->experience(),"<br>", $perso2->experience();
echo "<br>";
echo $perso1->degats(),"<br>", $perso2->degats();


?>