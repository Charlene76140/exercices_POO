<?php
    require "City.php";

    $city = new City ();
  
    // $city->nom = "Rouen";
    // $city->departement = "76";
    // $city->showLocation();
    
    $city->setName("Rouen");
    $city->setDept("76");

    echo "<p>" . $city->showLocation(). "</p>";


    $city2 = new City ();

    $city2->setName("Vernon");
    $city2->setDept("27");

    echo "<p>" . $city2->showLocation(). "</p>";
?>