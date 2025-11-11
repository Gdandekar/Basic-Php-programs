<?php
$num = 13;
$isPrime = true;

if ($num <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime)
    echo "$num is a Prime Number<br>";
else
    echo "$num is not a Prime Number<br>";
?>
