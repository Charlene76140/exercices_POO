<?php
    class OtherBird {
        public string $type;
        public string $color;
        public int $age;
        public array $areas;


        public function __construct($type, $color, $age, $areas) {
            $this->type = $type;
            $this->color = $color;
            $this->age = $age;
            $this->areas = $areas;
        }

        public function sing() {
            echo "<br>$this->type : Cui cui<br>";
        }

        public function fly (string $destination) {
            if($this->age >= 4){
                echo "The bird is flying to " . $destination;
            }
            else{
                echo "This bird is too young to fly";
            }
        }
    }

    
?>