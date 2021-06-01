<?php
    //exercice 1
    require "customer.php";

    $customer = new Customer ();
    var_dump($customer);

    $customer2 = new Customer ();
    var_dump($customer2);


    $customer->name = "Doe";
    $customer->firstname = "John";
    $customer->age = 42;
    $customer->payments = ["visa", "mastercard", "paypal"];
    var_dump($customer);

    //exercice 2
        
    $customer->name = strtoupper($customer->name);
    $customer->firstname = strtoupper($customer->firstname);
    var_dump($customer);

    $customer->payments[] = "cash";
    var_dump($customer);

    echo "<p>" . $customer->firstname. " " .$customer->name . " is ". $customer->age . " years old.</p>";
    echo "<p> He has the following means of payment : <br/>";
        foreach($customer->payments as $payment){
            echo "-  $payment <br/>";
        }; 
        
       
?>