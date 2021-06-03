<?php
    class UppgradedFrom extends Form{

        public function __construct(string $test){
            parent :: __construct($test);
        }

        public function setRadio($name, array $datas){
            foreach($datas as $key => $value){
                $this->code .= "<input type='radio' name='$name' value='$value'>'$key'</><br/>" ;
            }
            
        }

        public function setCheckbox($name, array $datas){
            foreach($datas as $key=> $value){
                $this->code .= "<input type='checkbox' name='$name' value='$value'>'$key'</><br/>" ;
            }
        }
    }
?>