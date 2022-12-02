<?php

include "./Car.php";

class Volvo extends Car {
    public function intro() : string {
      return "I'm a $this->name! car";
    }
}

?>