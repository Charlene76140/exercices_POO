<?php
    require "student.php";

    $student = new Student ();
    $student->name = "Timmy";
    $student->age = 35;

    var_dump($student);

    echo "<h2>Exercice 2</h2>";

    $student->setName();
?>