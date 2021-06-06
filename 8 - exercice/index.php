<?php
    require "Person.php";
    require "Client.php";
    require "Elector.php";

    $client = new Client ([
        "firstname"=>"Julie", 
        "lastname"=>"Dupont",
        "adress"=>"15 rue aux ours, 76000 Rouen"
    ]);

    // echo "<p>Nom : ". $client ->getLastname(). "</p>";
    // echo "<p>Prenom : ". $client ->getFirstname(). "</p>";
    // echo "<p>Adresse : ". $client->getAdress() . "</p>";

    echo "<p>Coordonées complètes : " . $client->getCoord(). "</p><br />";

    $electeur = new Elector([
        "firstname"=>"Julie", 
        "lastname"=>"Dupont",
        "bureau"=>"Rouen centre"
    ]);


    echo $electeur->getFirstname() . " " .  $electeur->getLastname() . " a voté à " . $electeur->aVoter();
    // var_dump($electeur);

?>