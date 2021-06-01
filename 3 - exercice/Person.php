<?php
    class Person {
        protected string $nom;
        protected string $prenom;
        protected string $adresse;

        public function __construct(string $nom, string $prenom, string $adresse) {
            $this->nom = $nom;
            $this->prenom = $prenom; 
            $this->adresse = $adresse;
        }

        public function setNom(string $nom){
            $this->nom = $nom;
        }

        public function setPrenom(string $prenom){
            $this->prenom = $prenom;
        }

        public function setAdresse(string $adresse){
            $this->adresse = $adresse;
        }

        public function getNom() : string{
            return $this->nom;

        }
        public function getPrenom() : string{
            return $this->prenom;
        }
        public function getAdresse() : string{
            return $this->adresse;
        }

        public function getCoord(){
            return $this-> nom . " " . $this->prenom . " habite à " . $this->adresse;
        }
    }
?>