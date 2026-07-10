<?php
// e. Constructor in PHP

class Student {
    public $name;

    function __construct($name) {
        $this->name = $name;
    }

    function display() {
        echo "Student name: " . $this->name;
    }
}

$student1 = new Student("Keymon");
$student1->display();
?>
