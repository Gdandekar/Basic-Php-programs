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
                $result = "Error: Division by zero!";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = "Invalid operator!";
            break;
    }

    echo "<h3>Result: $num1 $operator $num2 = $result</h3>";
}
?>

<form method="get">
    First Number: <input type="number" name="num1" required><br><br>
    Operator (+, -, *, /): <input type="text" name="operator" required><br><br>
    Second Number: <input type="number" name="num2" required><br><br>
    <input type="submit" value="Calculate">
</form>
