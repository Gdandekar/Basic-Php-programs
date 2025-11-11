<?php
echo "Simple PHP Calculator\n";

echo "Enter first number: ";
$num1 = trim(fgets(STDIN));

echo "Enter operator (+, -, *, /): ";
$operator = trim(fgets(STDIN));

echo "Enter second number: ";
$num2 = trim(fgets(STDIN));

$result = 0;

switch ($operator) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        if ($num2 == 0) {
            echo "Error: Division by zero is not allowed.\n";
            exit;
        }
        $result = $num1 / $num2;
        break;
    default:
        echo "Invalid operator!\n";
        exit;
}

echo "Result: $num1 $operator $num2 = $result\n";
?>
