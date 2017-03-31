<?php 


class Student {
	// private $predmet;
	private $ocenki = array();


	public function dodadiOcena($predmet, $ocenka){
		// $this->predmet = $predmet; 
		$this->ocenki[$predmet] = $ocenka;
	}

	public function prosek(){
		echo array_sum($this->ocenki) / count($this->ocenki);
	}

	public function najvisokaOcenka(){
		$max = 0;

		foreach ($this->ocenki as $value) {
			if($value > $max){
				$max = $value;
			}
		}

		return $max;
	}

	public function najvisokaOcenkaPredmet(){
		$max = 0;
		$predmet = '';

		foreach ($this->ocenki as $p=>$o) {
			if($o > $max){
				$max = $o;
				$predmet = $p;
			}
		}

		return $predmet;
	}

	public function najniskaOcenka(){
		$max = 10;

		foreach ($this->ocenki as $value) {
			if($value < $max){
				$max = $value;
			}
		}

		return $max;
	}

	public function najniskaOcenkaPredmet(){
		$max = 10;
		$predmet = '';

		foreach ($this->ocenki as $p=>$o) {
			if($o < $max){
				$max = $o;
				$predmet = $p;
			}
		}

		return $predmet;
	}
}



$s = new Student;
$s->dodadiOcena('Matematika', 3);
$s->dodadiOcena('Istorija', 4);
$s->dodadiOcena('Makedonski', 5);
$s->dodadiOcena('Angliski', 3);
$s->dodadiOcena('OTP', 2);
$s->dodadiOcena('Fizichko', 1);

echo $s->prosek();
echo '</br>';
echo $s->najvisokaOcenka();
echo '</br>';
echo $s->najvisokaOcenkaPredmet();
echo '</br>';
echo $s->najniskaOcenka();
echo '</br>';
echo $s->najniskaOcenkaPredmet();
echo '</br>';


?>