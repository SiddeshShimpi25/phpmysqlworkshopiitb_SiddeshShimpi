<?php
session_start();
$user=$_SESSION['u'];
echo $user;
$conn=mysqli_connect("localhost","root","","school");
$res=mysqli_query($conn,"SELECT * FROM sheet WHERE username='$user'");
while($row= mysqli_fetch_assoc($res))
{
    $m1=$row['html'];
    $m2=$row['mysql'];
    $m3=$row['php'];
    $per=$row['percentage'];
    $status=$row['result'];
    $user=$row['username'];
    $name=$row['name'];
}

echo "CURRENT DATA: <br>";

echo "NAME: ".$name."<br>";
echo "Marks in PHP: ".$m1."<br>";
echo "Marks in SQL: ".$m2."<br>";
echo "Marks in PHP: ".$m3."<br>";
echo "<br>Enter new DATA:";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<form action="update.php" method="POST">
Enter marks for HTML:
<input type="number" min=0 max=100 name="m1">
<br>
Enter marks for SQL:
<input type="number" min=0 max=100 name="m2">
<br>
Enter marks for PHP:
<input type="number " min=0 max=100 name="m3">
<br>
<br>
<input type="submit" value="UPDATE" name="UPDATE">
<br>
</form>
</body>
</html>

<?php
if(@$_POST["UPDATE"])
{
    $name=@$_POST["name"];

    $m1=@$_POST["m1"];
    $m2=@$_POST["m2"];
    $m3=@$_POST["m3"];
    $total=$m1+$m2+$m3;
    $per=$total/3;

    if($per>=60)
    {
        $status='P';
    }
    else{
        $status='F';
    }

    $con=mysqli_connect("localhost","root","","school");
    $sql=mysqli_query($con,"UPDATE `sheet` SET `php` = '$m3', `mysql` =' $m2', 
    `html` = '$m1', `percentage`=$per, `result`='$status' WHERE `sheet`.`username` = '$user' ");
    if($sql)
    {
        echo "UPDATED SUCCESSFULLY";
    }

    else{

        echo "UPDATION FAILED";
    }
}
?>