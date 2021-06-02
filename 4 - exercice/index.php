<?php
    require "Form.php";

    $form = new Form("");
    
    $form->setText("name");
    $form->setSubmit("form", "envoyer");
    $form->showForm();

    // var_dump($form);
?>
