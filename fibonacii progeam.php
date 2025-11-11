<?php
if (isset($_POST['n'])) {
    $n = (int)$_POST['n'];

    $firstterm = 0;
    $secondterm = 1;

    echo "<h3>Fibonacci series up to $n terms:</h3>";

    for ($i = 0; $i < $n; $i++) {
        echo $firstterm . " ";
        $nextterm = $firstterm + $secondterm;
        $firstterm = $secondterm;
        $secondterm = $nextterm;
    }
} else {
?>
    <form method="post">
        <label>Enter number of terms:</label>
        <input type="number" name="n" min="1" required>
        <input type="submit" value="Generate">
    </form>
<?php
}
?>
