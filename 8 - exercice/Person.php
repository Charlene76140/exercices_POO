<?php
    abstract class Person {

        protected string $lastname;
        protected string $firstname;

        public function __construct(array $data){
            $this->setLastname($data["lastname"]);
            $this->setFirstname($data["firstname"]);
        }

        public function setLastname(string $lastname){
            $this->lastname = $lastname;
        }

        public function getLastname(){
            return $this->lastname;
        }

        public function setFirstname(string $firstname){
            $this->firstname = $firstname;
        }

        public function getFirstname(){
            return $this->firstname;
        }

        
    }
?>