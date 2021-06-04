<?php
    class Voiture extends Vehicule{
        protected int $porte;
        const PORTE=[3,5];
        

        public function __construct(array $data){
            parent :: __construct($data);
            $this->setPorte($data["porte"]);
        }

        public function setPorte(int $porte){
            if(in_array($porte, self::PORTE)){
                $this->porte = $porte;
            }
            else{
                echo "Merci de choisir entre 3 et 5 portes uniquement";
            }
            
        }
        public function getPorte(){
            return $this->porte;
        }
    }
?>