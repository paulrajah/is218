<?php

class MyClass {
	public $prop1 = "I'm a class projecty!"; 
	public function setProperty($newval) {
		$this->prop1 = $newval;
	}
	public function getProperty() {
		return $this->prop1 . "<br />";
	}
}
$obj = new MyClass;

echo $obj->getProperty();
$obj->setProperty("I'm a new property value!");//set a new object
echo $obj->getProperty(); //Read it out again

?>
