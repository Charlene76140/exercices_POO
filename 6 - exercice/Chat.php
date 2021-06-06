<?php
    class Chat{

        protected int $id;
        protected string $nom;
        protected int $age;
        protected string $sexe;
        protected string $couleur;

        const SEXE = ["m", "f"];
        const COULEUR =[
            "gris",
            "noir",
            "blanc"
        ]; 
        
        public function __construct(?array $data=null){
            if($data){
                foreach($data as $key=>$value){
                    $setter= "set". ucfirst($key);
                    if(method_exists($this,$setter)){
                        $this->$setter(htmlspecialchars($value));
                    }
                }
            }
        }

        public function setId(int $id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setNom(string $nom){
            if(strlen($nom) <=15){
                $this->nom = $nom;
            }
            else{
                echo "merci de saisir un nom entre 1 et 15 caractères";
            }
            
        }

        public function getNom(){
            return $this->nom;
        }

        public function setAge(int $age){
            if($age >= 0 AND $age < 30){
                $this->age = $age;
            }
            else{
                echo "merci de saisir un age entre 0 et 30 ans";
            }
        }

        public function getAge(){
            return $this->age;
        }

        public function setSexe(string $sexe){
            if(in_array($sexe, self::SEXE)){
                $this->sexe = $sexe;
            }
            else{
                echo "merci de saisir 'm' pour male ou 'f' pour femelle uniquement";
            }
        }

        public function getSexe(){
            return $this->sexe;
        }

        public function setCouleur(string $couleur){
            if(in_array($couleur, self::COULEUR)){
                $this->couleur = $couleur;
            }
            else{
                echo "merci de choisir une couleur entre : gris, noir et blanc";
            }
        }

        public function getCouleur(){
            return $this->couleur;
        }
    }
?>