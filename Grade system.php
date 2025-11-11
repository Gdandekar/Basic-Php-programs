<?php
    $marks=91;
    echo " Marks Obtained = " .$marks."<br>";
    if($marks >=90)
    {
        echo " A Grade <br> ";
    }
    elseif($marks >=75 )
    {
        echo "B Grade <br>";
    }
    elseif($marks >=60 )
    {
        echo "C Grade <br>";
    }
    elseif($marks >=35 )
    {
        echo " D Grade <br>";
    }
    else
    {
        echo " failed <br>";
    }

?>