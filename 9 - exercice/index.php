<?php
    require "Vehicule.php"; 
    require "Bus.php";
    require "Voiture.php";

    $vehicule = new Bus ([
        "immat"=> "PS-75-14",
        "couleur"=> "noir",
        "etage"=> 2
    ]);
    
    echo "<p> Le premier véhicule est un bus immatriculé ". $vehicule->getImmat().  " il est de couleur ". $vehicule->getCouleur(). " et il comprend ". $vehicule->getEtage() . " étage(s).</p>";


    $vehicule2 = new Voiture([
        "immat"=> "VF-98-22",
        "couleur"=> "blanc",
        "porte"=> 3
    ]);

    echo "<p> Le deuxième véhicule est une voiture immatriculée ". $vehicule2->getImmat().  " et il à ". $vehicule2->getPorte() . " porte(s).</p>";

    $vehicule2->setPorte(5);
    echo "<p> Le deuxième véhicule est une voiture immatriculée ". $vehicule2->getImmat().  " et il à ". $vehicule2->getPorte() . " porte(s).</p>";
?>