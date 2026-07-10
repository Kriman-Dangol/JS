<?php
// g. Class in PHP

class Car {
    public $brand;

    function showBrand() {
        echo "Car brand: " . $this->brand;
    }
}

$car1 = new Car();
$car1->brand = "Toyota";
$car1->showBrand();
?>
