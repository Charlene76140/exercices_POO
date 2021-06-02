<?php
  class Form {

    public $code;

    public function __construct(string $test){
      $this->code = "<form action='$test' method ='post'>";
    }



    public function setText(string $name, string $value=null){
      $this->code = "<input type='text' name='". $name ."' value='". $value ."'>";
    }

    public function setSubmit(string $name, string $value=null){
      $this->code .= "<input type='submit' name='$name' value='$value'></form>";
    }

    public function showForm(){
      echo $this->code;
    }
  }
?>