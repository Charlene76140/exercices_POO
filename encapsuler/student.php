<?php
    class Student {
        protected string $name;
        protected int $age;

        public function setName(string $name): Student {
            $this->name = $name ;
        }

        public function setAge(string $age): Student {
            $this->age = $age ;
        }

    }

?>