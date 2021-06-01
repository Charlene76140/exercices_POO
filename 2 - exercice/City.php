<?php
    class City {
        protected string $nom;
        protected int $departement;

        public function __construct(string $nom, int $departement){
            $this->setName($nom);
            $this->setDept($departement);
        }

        public function setName(string $nom){
            $this->nom = $nom;
        }

        public function setDept(int $departement){
            $this->departement = $departement;
        }

        public function getName() :string {
            return $this->nom;
        }

        public function getDept() :int {
            return $this->departement;
        }
            
        public function showLocation(){
            echo "La Ville de " . $this->nom . " est dans le département " . $this->departement .".";
        }
    }
?>