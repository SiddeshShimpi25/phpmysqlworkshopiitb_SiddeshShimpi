<?php
if(isset($_POST['b1']))
{
    $str  = @$_POST["string"];
    $substr = substr($str,3);
    if($str)
    {
        echo "Total Characters in the string: ". strlen($str)."<br>";
        echo "Array of the string: ";
        echo var_dump(str_split($str))."<br>";
        echo "Reverse of the string: ". strrev($str)."<br>";
        echo "The string in lower case: ". strtolower($str)."<br>";
        echo "The string in upper case: ". strtoupper($str)."<br>";
        echo "The substring from given string: $substr<br>";
        echo "The string after replacing with substring: ". str_replace($substr," is my nickname",$str);
    }
 
}
?>











<html>
<head>
    <h2>
        String Functions.
    </h2>
</head>
<body>
<form action="q2_string_functions.php" method="POST">
Enter a String: <input type="text" name="string" placeholder="Enter a string"><br>
<input type="submit" value="Enter" name="b1"/>
</form>
</body>
</html>