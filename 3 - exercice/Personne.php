<?php
    class Personne {
        protected string $nom;
        protected string $prenom;
        protected array $adresse;

        public function __construct(string $nom, string $prenom, array $adresse) {
            $this->nom = $nom;
            $this->prenom = $prenom; 
            $this->adresse = $adresse;
        }

        public function setNom(){

        }

        public function setPrenom(){
            
        }

        public function setAdresse(){
            
        }

        public function getNom(){
            return 

        }
        public function getPrenom(){
            
        }
        public function getAdresse(){
            
        }

        public function getCoord(){
            return $this->nom
        }
    }
?>