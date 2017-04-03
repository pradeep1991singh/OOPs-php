<?php

abstract class Animal {

	public $name;
	public $color;

	public function describe() {
		return $this->name.' is '.$this->color;
	}

	abstract public function makeSound();

}

class Duck extends Animal {

	public function describe() {
		return parent::describe();
	}

	public function makeSound() {
		return 'Quack';
	}	

}

class Dog extends Animal {

	public function describe() {
		return parent::describe();
	}

	public function makeSound() {
		return 'Bark';
	}	

}

$animal = new Duck();
$animal->name = 'Donald';
$animal->color = 'White';
echo $animal->describe().'<br/>';
echo $animal->makeSound().'<br/>';

$animal2 = new Dog();
$animal2->name = 'Shusu';
$animal2->color = 'Brown';
echo $animal2->describe().'<br/>';
echo $animal2->makeSound().'<br/>';
