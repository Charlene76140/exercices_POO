<?php
    require "Form.php";
    require "uppgradedForm.php";

    $form = new UppgradedFrom("");
    
    $form->setText("name");
    $form->setRadio("radio", ["Homme"=>1, "Femme"=>0]);
    $form->setCheckbox("check[]", ["entre 20 et 30 ans"=>"oui", "entre 30 et 60 ans"=>"oui"]);
    $form->setSubmit("form", "envoyer");


    $form->showForm();

?>
