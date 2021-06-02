<?php
    class Clio {
        const PORTE=[3,5];
        const PEINTURE= [
            "rouge"=>115,
            "bleu"=>116,
            "gris"=>117,
            "jaune"=>118,
            "noire"=>119,
            "rose"=>120,
            "blanc"=>121, 
            "violet"=>122
        ];

        protected int $porte;
        protected string $peinture;
        protected static int $prix= 18000;

        public function __construct(int $porte, string $peinture){
            $this->porte = $porte;
            $this->peinture = $peinture; 
        }



        public function setPorte(int $porte){
            if(in_array($porte, self::PORTE)) {
                $this->porte = $porte;
            }
            else {
                throw new Exception("nombre de portes incorrect, veuillez choisir entre 3 et 5 portes");
            }
        }

        public function setPeinture(string $peinture){
            if(in_array($peinture, self::PEINTURE)){
                $this->peinture = $peinture;
            }
            else {
                throw new Exception("couleur de peinture incorrects");
            }
        }

        public function getPorte(){
            return $this->porte;
        }

        public function getPeinture() {
            return $this->peinture;
        }
        
        public static function getPrix (){
            return self::$prix;
        }
        
    }
?>