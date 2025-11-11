<?php
$number = 5;
echo "Number is :" . $number . "\n";
$fact = 1;
for ($i = 1; $i <= $number; $i++) 
{
    $fact *= $i;
}
echo "Factorial of number is: " . $fact . "\n";
?>
