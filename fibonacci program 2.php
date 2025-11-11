<?php
// Hardcoded number of Fibonacci terms
$n = 10;

$firstterm = 0;
$secondterm = 1;

echo "Fibonacci series up to " . $n . " terms:\n";

for ($i = 0; $i < $n; $i++) {
    echo $firstterm . " ";
    $nextterm = $firstterm + $secondterm;
    $firstterm = $secondterm;
    $secondterm = $nextterm;
}

echo "\n";
?>
