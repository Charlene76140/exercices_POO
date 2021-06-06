<?php
    class Bus extends Vehicule{
        protected int $etage;
        const ETAGE=[1 , 2];
        

        public function __construct(array $data){
            parent :: __construct($data);
            $this->setEtage($data["etage"]);
        }

        public function setEtage(int $etage){
            if(in_array($etage, self::ETAGE)){
                $this->etage = $etage;
            }
            else{
                echo "merci de saisir 1 ou 2 étages uniquement";
            }
            
        }
        public function getEtage(){
            return $this->etage;
        }
    }
?>