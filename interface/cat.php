<?php

include "./interfaceAnimal.php";

class Cat implements Animal {

    public function makeSound() {
      echo "Meow";
    }
}

?>