<?php
abstract class Car {
    public $name;

    public function __construct($name) {
      $this->name = $name;
    }
    
    abstract public function intro() : string;

    public function test(){
      echo "hello";
    }
  }
?>