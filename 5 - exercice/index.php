<?php
    require "Clio.php";

    $clio = new Clio(5, "rose");
    
    // $clio -> setPorte(3);
    // $clio -> setPeinture("rouge");

    echo "<p>Le nombre de porte est : ". $clio->getPorte() . "</p>";
    echo "<p>La référence de la peinture est : ". $clio->getPeinture() . "</p>";

    var_dump($clio->getPeinture());
    echo "<p>Son prix est  : " . Clio :: getPrix() ." € </p>";
?>