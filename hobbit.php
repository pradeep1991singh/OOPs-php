<?php 

// include 'entity.php';

// altenate to include
spl_autoload_register(function($class_name) {
	include $class_name . ".php";
});

class Hobbit extends Entity {

	public function greet() {
		echo 'Hi, there! I\'m '. $this->name .' from shrine!<br /><br />';
	}

}

$frodo = new Hobbit('Frodo', '4.5');

// $frodo->gender = 'male';

// echo $frodo->gender;

$frodo->greet();

// var_dump(isset($frodo->name));