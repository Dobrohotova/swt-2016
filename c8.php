<?php 

class Student {
	// properties - osobini
	public $age;
	public $height;
	public $gender;
	public $weight;
	public $name;
	public $address;
	public $studentId;

	// methods - akcii
	public function learn(){
		echo 'The student '.$this->name.' is learning.';
	}
	public function sleep(){
		echo 'The student '.$this->name.' is sleeping.';		
	}
	public function practice(){
		echo 'The student '.$this->name.' is practicing.';
	}
	public function takeExam(){
		echo 'The student '.$this->name.' is taking an Exam.';
	}
	public function takeLecture(){
		echo 'The student '.$this->name.' is taking a lecture.';
	}
}


// $studentOne = new Student;
// 	$studentOne->age = 35;
// 	$studentOne->height = 182;
// 	$studentOne->gender = 'm';
// 	$studentOne->weight = 90;
// 	$studentOne->name = 'Bojan Gavrovski';
// 	$studentOne->address = 'Pero Nakov BB';
// 	$studentOne->studentId = '54489';
// print_r($studentOne);
// echo '</br>';

// $studentTwo = new Student;
// 	$studentTwo->age = 37;
// 	$studentTwo->height = 186;
// 	$studentTwo->gender = 'f';
// 	$studentTwo->weight = 100;
// 	$studentTwo->name = 'Perica Peroovska';
// 	$studentTwo->address = 'Pero Nakrov CC';
// 	$studentTwo->studentId = '54449';
// print_r($studentTwo);
// echo '</br>';

// $studentOne->learn(); 
// $studentOne->sleep(); 
// $studentOne->practice(); 
// $studentOne->takeExam(); 
// $studentOne->takeLecture(); 



$student = new Student;
$student->name = 'Irina Dobrohotova';
$student->learn();

$studentThree = new Student;
$studentThree->name = 'Vesna Vesnovska';
$studentThree->learn();

echo '</br>';

class Calculator {
	private $a;
	private $b;

	public function setA($input){
		if(is_numeric($input)){
			$this->a = $input;
		} else {
			echo 'Please enter a number for A.';
		}
	}

	public function setB($input){
		if(is_numeric($input)){
			$this->b = $input;
		} else {
			echo 'Please enter e number for B.';
		}
	}




	public function __construct($inputA, $inputB){
		$this->setA($inputA);
		$this->setB($inputB);
	}



	public function __destruct(){
		echo 'Calling the D.E.S.T.R.U.C.T.O.R. !!!';
	}




	public function add(){
		echo $this->a + $this->b;
	}
	public function substract(){
		echo $this->a - $this->b;
	}
	public function multiply(){
		echo $this->a * $this->b;
	}
	public function divide(){
		echo $this->a / $this->b;
	}
}

$number = new Calculator(4, 19);
// $number->a = 10;
// $number->b = 5;

// $number->setA(10);
// $number->setB(5);

$number->add();
echo '</br>';
$number->substract();
echo '</br>';
$number->multiply();
echo '</br>';
$number->divide();
echo '</br>';


unset($number);
echo '</br>';
echo 'Kraj!';
echo '</br>';




?>