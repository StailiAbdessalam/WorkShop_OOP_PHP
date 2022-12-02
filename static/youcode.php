<?php
include "./Domaine.php";
class domainyoucode extends Domaine {

  public $websiteName;

//   protected static function getWebsiteName() {
//     return "youcode.ma";
//   }

    public function getNameWebSite(){
        echo Domaine::getWebsiteName();
    }

  public function __construct() {
    $this -> websiteName = parent::getWebsiteName();
  }	
}

$youcode = new domainyoucode;
echo $youcode -> websiteName;
echo "</br>";
$youcode->getNameWebSite();
?>