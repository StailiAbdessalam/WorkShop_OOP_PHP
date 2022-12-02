<?php

include "./Car.php";

class Audi extends Car {
    public function intro() : string {
      return "I'm a $this->name! car";
    }
}

?>