<?php
$a = 10;
$b = 5;
$operator = '*';

switch ($operator) {
    case '+':
        echo "Result: " . ($a + $b);
        break;
    case '-':
        echo "Result: " . ($a - $b);
        break;
    case '*':
        echo "Result: " . ($a * $b);
        break;
    case '/':
        echo "Result: " . ($a / $b);
        break;
    default:
        echo "Invalid Operator";
}
echo "<br>";
?>
