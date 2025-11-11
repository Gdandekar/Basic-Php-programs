<?php
$marks=85;
echo "The Marks of Student is :" .$marks."<br>";
echo"<br>";
if($marks > 80)
{
    echo "First Division ! ";
}
elseif($marks >=60 && $marks <=79)
{
    echo "Second  Division ! ";
}
elseif($marks >=45 && $marks <=59)
{
    echo "Third  Division !";
}
elseif($marks >35 )
{
    echo "Fourth Division";
}
else
{
    echo " Fail !! ,Better Luck Next Time" ;
}
?>