<?php
    require "bird.php";

    $bird = new Bird ();

    $bird->type = "sparrow";
    $bird->color = "grey";
    $bird->age = 4;
    $bird->areas = ["europe", "north america", "asia"];

    var_dump($bird);

    $bird->sing();
    $bird->fly("Paris");

    echo "<p>Exercice 2</p>";

    require "otherBird.php";

    $otherBird = new OtherBird("sparrow", "white", 2, ["europe", "north america", "asia"]);
    var_dump($otherBird);
?>
