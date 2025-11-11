<?php
echo "Enter number of terms: ";
$n = trim(fgets(STDIN));  // Reads input from user and removes newline

$firstterm = 0;
$secondterm = 1;

echo "Fibonacci series up to $n terms:\n";

for ($i = 0; $i < $n; $i++) {
    echo $firstterm . " ";
    $nextterm = $firstterm + $secondterm;
    $firstterm = $secondterm;
    $secondterm = $nextterm;
}

echo "\n";
?>  
