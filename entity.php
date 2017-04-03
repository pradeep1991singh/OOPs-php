<?php

// final class Entity {

class Entity {

	protected $name;
	public $height;
	private $gender;

	public function __construct($name, $height) {
		echo ' -Constructor called- <br /><br />';
		$this->name = $name;
		$this->height = $height;
	}

	public function __set($gender, $value) {
		echo 'Setting '.$gender.' to <strong>'.$value.'</strong><br /><br />';
		$this->gender = $value;
	}

	public function __get($gender) {
		echo 'Getting '.$gender.' <strong>'.$this->gender.'</strong><br /><br />';
		$this->gender = $value;
	}

	public function __isset($gender) {
		echo 'Is '.$gender.' set?<br /><br />';
		return isset($this->gender);
	}

	public function greet() {
		echo 'Hi, there! I\'m '. $this->name .' from middle Earth!<br /><br />';
	}

	public function __destruct() {
		echo '<br /><br /> -Destructor called- ';
	}	

}