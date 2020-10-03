<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","visitor_counter") or die(mysqli_connect_error());
$extract = mysqli_query($conn,"SELECT * FROM counter where id=1");
while($row=mysqli_fetch_assoc($extract)){
    $count=$row['count']; //database already has count value as 0.
}
$extract = mysqli_query($conn,"UPDATE counter SET count=$count+1 where id=1");
echo "You have $count visitors";
?>
