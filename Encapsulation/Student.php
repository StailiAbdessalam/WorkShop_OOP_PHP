<?php

class Student {

	private $firstname;
	private $gender;

	public function getFirstName() {
		return $this->firstname;
	}

    public function getGender() {
		return $this->gender;
	}

	public function setGender($gender)
	{
		$this->gender=$gender;
	}

	public function setFirstName($firstname)
	{
		$this->firstname=$firstname;
	}

	public function reponse(){

		echo "firstName: ".$this->firstname."</br> Gender: ".$this->gender;
	}




	// public function setFirstName($firstname) {
	// 	$this->firstname = $firstname;
	// 	echo("First name is set to ".$firstname);
	// 	echo("<br>");
	// }

	

	// public function setGender($gender) {
	// 	if ('Male' !== $gender and 'Female' !== $gender) {
	// 		echo('Set gender as Male or Female for gender </br>');
	// 		return;
	// 	}

	// 	$this->gender = $gender;
	// 	echo("Gender is set to ".$gender);
	// 	echo("<br>");
	// }
}

?>
