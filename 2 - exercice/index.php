<?php
    require "City.php";

    $city = new City ("Rouen", "76");  

    echo "<p>" . $city->showLocation(). "</p>";
?>