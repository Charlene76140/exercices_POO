<?php
    require "Clio.php";

    $clio = new Clio(5, Clio::PEINTURE["rose"]);
    $clio2 = new Clio(3, "noire");
    $clio3= new Clio(3, "vert");

    echo "<p>Le nombre de porte est : ". $clio->getPorte() . "</p>";
    echo "<p>La référence de la peinture est : ". $clio->getPeinture() . "</p>";
    echo "<p>Son prix est  : " . Clio :: getPrix() ." € </p>";

    $clio->setPrix(20000);

    echo "<p>Le nombre de porte est : ". $clio2->getPorte() . "</p>";
    echo "<p>La référence de la peinture est : ". $clio2->getPeinture() . "</p>";
    echo "<p>Son prix est  : " . Clio :: getPrix() ." € </p>";

    $clio3->setPorte(5);
    echo "<p>Le nombre de porte est : ". $clio3->getPorte() . "</p>";
    echo "<p>La référence de la peinture est : ". $clio3->getPeinture() . "</p>";
    echo "<p>Son prix est  : " . Clio :: getPrix() ." € </p>";
?>