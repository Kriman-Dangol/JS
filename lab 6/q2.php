<?php
// b. Check Prime Number in PHP

$number = 7;
$isPrime = true;

if ($number < 2) {
    $isPrime = false;
}

for ($i = 2; $i < $number; $i++) {
    if ($number % $i == 0) {
        $isPrime = false;
    }
}

if ($isPrime) {
    echo "$number is a Prime Number";
} else {
    echo "$number is not a Prime Number";
}
?>
