<?php
echo "Enter a Number :";
$n = (int)trim(fgets(STDIN));
$sum = 0;
$a = $n;
while ($n > 0) {
    $d = $n % 10;
    $sum = $sum + ($d * $d * $d);
    $n = (int)($n / 10);
}
if ($sum == $a) {
    echo "Number is Armstrong No\n";
} else {
    echo "Number is not Armstrong No\n";
}
?>

