<?php
    require "Form.php";

    $form = new Form("");

    $form->setTexte("name");

    $form->setSubmit("form", "envoyer");

    $form->showForm();
?>
