<?php 


class Student {
	public static $ime;

	public static function Teach(){
		echo 'Trying to teach PHP to '.self::$ime;
	}
}

Student::$ime = 'Martin';
Student::Teach();

// ako ni se definirani kako static ne ni treba object za da mozheme da setirame properties i methods
// self ni e zamena za $this
// :: se vika scope operator, e zamena za ->








?>