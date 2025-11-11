<?php
$n=10;
echo "  Number of term in fibonaci series :- $n";
echo"<br>";
$a=0;
$b=1;
echo " $a $b";
echo " ";
$i=3;
for($i=3;$i<=$n;$i++)
{
    $c=$a+$b;
    echo "$c";
    echo "  " ;
    $a=$b;
    $b=$c;
}
?>
