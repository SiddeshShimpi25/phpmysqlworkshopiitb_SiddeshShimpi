<?php

if(isset($_GET['b1']))
{
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$i=0;
if($a==$b & $b==$c){
    echo "Triange is an equilateral triangle.";
}

elseif($a==$b | $a==$c | $b==$c){
    echo "Triange is an isosceles triangle.";
}
else{
    if($a*$a==$b*$b+$c*$c | $b*$b==$a*$a+$c*$c | $c*$c==$b*$b+$a*$a){
        echo "Triangle is a right angled triangle.";
    }
    else{
        echo "Triangle is a scalene traingle.";
    }
       
    }
}?>

<html>

<head>
    <h2>
        Type of triangle.
    </h2>
</head>
<body>
<p>Enter sides</p>
<form action="q6_1_special_variables_html.php" method="GET">
Side a: <input type="number" min="1" name="a" placeholder="Enter side 1"><br>
Side b: <input type="number" min="1" name="b" placeholder="Enter side 2"><br>
Side c: <input type="number" min="1" name="c" placeholder="Enter side 3"><br>
<input type="submit" value="Check" name="b1"/>

</form>

</body>
</html>