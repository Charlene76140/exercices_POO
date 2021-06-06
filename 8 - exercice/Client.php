<?php
    class Client extends Person{

        protected string $adress;

        public function __construct(array $data){
            parent :: __construct($data);
            $this->setAdress($data["adress"]);
        }

        public function setAdress(string $adress){
            $this->adress = $adress;
        }

        public function getAdress(){
            return $this->adress;
        }

        function getCoord(){
            return $this->firstname . " " .$this->lastname . " ". $this->adress;
        }

    }
?>