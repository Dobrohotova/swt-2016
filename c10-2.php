<?php 


class A {
	private $podatoci = [];
	// public $ime;

	public function __set($name, $value){
		$this->podatoci[$name] = $value;
	}

	public function __get($name){
		return $this->podatoci[$name];
	}
}

$a = new A;
$a->ime = 'Pero';
$a->prezime = 'Perovski';

// echo $a->ime;


class B {
	private $ime;

	public function setIme($i){
		$this->ime = $i;
	}

	public function __get($key){
		return $this->$key;
	}
}

$b = new B;
$b->setIme('Bojan');
echo $b->ime;

print_r($b);


$c = 'pero';
$pero = 'G';
$$c = 'H';
echo $pero;


class C {
	public function __call($method, $attributes){
		echo "</br>Kako Vardaaaaar kje dotecham.. Tra la la.. $method";
	}
}

$c = new C;
$c->sing();
$c->play();
$c->dance();
$c->start();
$c->end();

// call povikuva metodi koi ili se nedostapni od nadvor ili ne postojat

echo '</br>';
echo '</br>';

class D {
	public function __call($method, $attributes){
		echo "Method: $method, Attributes: ".implode(', ', $attributes);
	}
}

$d = new D;

$d->jadi('Pizza', 'Burger', 'Burek');
echo '</br>';
$d->setStudent('Bojan', 'Gavrovski', 3, 7.2);
echo '</br>';
$d->pej('Kako Vardaaaaar..');


class E {
	private function pej1(){
		echo 'Somebody once told me the world is gonna b**w me!';
	}

	private function pej2($pesna){
		echo $pesna;
	}

	public function __call($method, $arguments){

		if($method == 'pej' && count($arguments) == 0){
			$this->pej1();
		} else if($method == 'pej' && count($arguments) == 1){
			$this->pej2($arguments[0]);
		}
	}
}

//arguments e niza

echo '</br>';
$e = new E;
$e->pej();
echo '</br>';
$e->pej('Tra la la la la la la la..');



?>