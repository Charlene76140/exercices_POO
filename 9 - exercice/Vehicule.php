<?php
    class Vehicule {
        protected string $immat;
        protected string $couleur;

        public function __construct(array $data){
            foreach($data as $key=>$value){
                $setter = "set". ucfirst($key);
                if(method_exists($this,$setter)){
                    $this->$setter(htmlspecialchars($value));
                }
            }
        }

        public function setImmat(string $immat){
            $this->immat = $immat;
        }
        public function getImmat(){
            return $this->immat;
        }

        public function setCouleur(string $couleur){
            $this->couleur = $couleur;
        }
        public function getCouleur(){
            return $this->couleur;
        }
    }
?>