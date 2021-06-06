<?php
    class Elector extends Person{
        protected string $bureau;
        protected bool $vote;


        public function __construct(array $data){
            parent :: __construct($data);
            $this->setBureau($data["bureau"]);
            $this->vote = false;
        }

        public function setBureau(string $bureau){
            $this->bureau = $bureau;
        }

        public function getBureau() {
            return $this->bureau;
        }
        
        public function setVote(bool $vote) {
            $this->vote = $vote;
        }
        
        public function getVote() {
            return $this->vote;
        }

        public function aVoter(){
           if($this->vote){
               echo "Vous avez déjà voté";
               return;
           }
           else{
               $this->vote = true;
               return  $this->bureau;
           }
        }
    }
?>