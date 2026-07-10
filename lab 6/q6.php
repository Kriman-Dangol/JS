<?php
// f. Inheritance in PHP

class Animal {
    function eat() {
        echo "This animal eats food\n";
    }
}

class Dog extends Animal {
    function bark() {
        echo "The dog barks\n";
    }
}

$dog = new Dog();
$dog->eat();
$dog->bark();
?>
