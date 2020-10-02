
<?php

error_reporting(0);
$conn = mysqli_connect("localhost","root","","result") or die(mysqli_connect_error());


if ($conn) {

$extract = mysqli_query($conn,"SELECT * FROM class1 WHERE name='Rohan'");

while ($row = mysqli_fetch_assoc($extract)) {

$m1 = $row["sub1"];
$m2 = $row["sub2"];
$m3 = $row["sub3"];
$m4 = $row["sub4"];
$m5 = 99;
$name = $row["name"];
$newtotal = $m1+$m2+$m3+$m4+$m5;
$newper = ($newtotal / 500 ) * 100 ;
$sql="UPDATE class1  SET sub5='$m5' , total_obtained = '$newtotal' , percentage = '$newper' WHERE name='$name'";
$write=mysqli_query($conn,$sql);
}   
echo "Marks updated succesfully.<br>";
}
?>