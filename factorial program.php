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
or 
// USER DEFINE 

<?php
echo "Enter a number: ";
$n = trim(fgets(STDIN));  // Read user input

$fact = 1;

for ($i = 1; $i <= $n; $i++) {
    $fact *= $i;
}

echo "Factorial of $n is: $fact\n";
?>


