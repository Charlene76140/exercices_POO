<?php
    require "exercice1/dog.php";

    $dog1 = new Dog ();
    $dog2 = new Dog ();
    $dog3 = $dog2;
    var_dump($dog1);
    var_dump($dog2);
    var_dump($dog3);


    require "exercice2/customer.php";
    $customer = new Customer ();
    $customer->name = "Doe";

    $customer->firstname = "John";
    $customer->$age = 42;
    $customer->payments = ["via","mastercard","paypal"];
    $customer->dog= $dog1;
    var_dump($customer);

    $customer2= new Customer ();
    var_dump($customer2);
?>