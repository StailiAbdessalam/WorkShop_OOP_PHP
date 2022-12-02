<?php
include "./Fruit.php";
class Apple extends Fruit{

    public $size = 100;

    public function message() {
        echo "i'm a apple Class.";
    }


}

?>