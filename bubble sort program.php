16.Bubblesort
<?php
function bubblesort(&$arr) 
{ // Pass by reference
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) 
	{
        for ($j = 0; $j < $n - $i - 1; $j++)
		 {
            if ($arr[$j] > $arr[$j+1]) 
			{
                	$temp = $arr[$j];
                	$arr[$j] = $arr[$j + 1];
                	$arr[$j + 1] = $temp;
            		}
        	}
    	}
}
$arraytosort = [63, 34, 25, 12, 22, 11, 90];
echo "original array : " . implode(" , ", $arraytosort) . "<br>";
bubblesort($arraytosort); 
echo "sorted array : " . implode(" , ", $arraytosort) ."<br>";
?>

