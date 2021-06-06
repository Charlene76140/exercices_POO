<?php
    require "Person.php";

    $person = new Person ("Charlene", "Saint-Julien", "l'avenue aux loups, 76100 Rouen");

   echo $person->getCoord();

   $person2 = new Person ("Julien", "Dupont", "35 rue Victor Hugo, 75000 Paris");

   echo "<p>" . $person2 -> getCoord() . "</p>";
?>