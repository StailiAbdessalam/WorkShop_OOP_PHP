<?php

include "./InterfaceAnimal.php";

class Mouse implements Animal {
    public function makeSound() {
      echo " Squeak ";
    }
  }

?>