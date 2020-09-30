<?php
    $m1=array(
        array(7,5),
        array(10,8)
    );
    $m2=array(
        array(6,7),
        array(5,2)
    );
    echo "Addition of two 2x2 matrices is: <br>";
    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $m1[$i][$j]+$m2[$i][$j]." ";
        }
        echo "<br>";
    }
?>