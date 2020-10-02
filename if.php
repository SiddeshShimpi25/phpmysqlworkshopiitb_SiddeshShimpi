<?php
$n= readline("How many numbers u want to check: ");
for ($a = 0; $a < $n; $a++){
$x= readline("Enter a number: ");
if($x%2!=0){
echo "Number $x is odd \n";
}
else{
echo "Number $x is even \n";
}

}

?>