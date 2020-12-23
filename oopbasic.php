<?php 

class Calculator {
	
	public $a;
	public $b;
	public $c;

	public function __construct($x=10, $y=30){
	this->a = $x;
	this->b = $y;
	}

	public function add(){
		$this->c = $this->a + $this->b;
		return $this->c;
	}

}

$cal1 = new Calculator( 14, 40);
//$cal1->a = 20;
//$cal1->b = 50;

echo $cal1->add();

echo "<br>";

$cal2 = new Calculator( 16, 40);

echo $cal2->add();

echo "<br>";

class Porag extends Calculator{

	public function anewval(){
		echo $this-> add();
	}
}

$cal3 = new Porag();

echo $cal3->anewval();