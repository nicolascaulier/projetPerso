<?php
session_start();

$bdd = new PDO ('mysql:host=localhost;dbname=id12641580_data', 'id12641580_nico', 'Steelux2610@');

if(isset($_SESSION['ID'])) {
    $user = $bdd->prepare('SELECT * FROM membre WHERE ID = ?');
    $user->execute(array($_SESSION['ID']));
    $userinfos = $user->fetch();
}

?>