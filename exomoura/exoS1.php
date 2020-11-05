
<?php


function connection()
{

    $servername = "10.115.49.73";
    $username = "nicolas";
    $password = "nicolas";
    $dbname = "nicolas";


    try
    {
        $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }
    $reponse = $bdd->query('SELECT* FROM articles');
    
    while ($donnees = $reponse->fetch())
    { 
        echo "<td>".$donnees['nom']."</td>" ;    
    }
    $reponse->closeCursor();
}

/*function name()

{ 

    while ($donnees = $reponse->fetch())
    { 
        echo "<td>".$donnees['nom']."</td>" ;    
    }
    $reponse->closeCursor();
}

*/





function connection2()
{


$servername = "10.115.49.73";
    $username = "nicolas";
    $password = "nicolas";
    $dbname = "nicolas";


    try
    {
        $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

{ 
    $reponse = $bdd->query('SELECT* FROM articles');
    
    while ($donnees = $reponse->fetch())
    {
        
        echo "<td>".$donnees['prix']."</td>";
        
    }
    $reponse->closeCursor();
}
}  


    //echo connection();
    echo "<table>";
    echo "<tr>";
    //echo name();
    echo connection();
    echo "</tr>";
    echo "<tr>";
    echo connection2();
    echo "</tr>";
    echo "</table>";
  









     /*function afficheTabNom()
    {
        while ($donnees = $reponse->fetch())
    {
        
        echo $donnees['prix'] . '<br />';
    }
    }

    function afficheTabAge()
    {
        while ($donnees = $reponse->fetch())
    {
        
        echo $donnees['prix'] . '<br />';
    }
    }
    */
?>
<style>
table, td {
  border: 1px solid black;
}
td {
  width: 50px;
  text-align: center;
}

</style>