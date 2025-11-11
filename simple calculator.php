<?php
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operator'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operator'];

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
                echo "Error: Division by zero is not allowed.";
                exit;
            }
            $result = $num1 / $num2;
            break;
        default:
            echo "Invalid operator!";
            exit;
    }

    echo "Result: $num1 $operator $num2 = $result";
} else {
    echo "Usage example: <br>";
    echo "calculator.php?num1=10&operator=*&num2=5";
}
?>
