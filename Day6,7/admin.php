<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<H2>SELECT THE FUNCTION YOU WANT TO PERFORM:</H2>
<form action="insert.php" method="POST">
<b>Insert new student: </b>
<input type="submit" value="INSERT">


</form>
<br><form action="admin.php" method="POST">
<b>Edit existing student: </b>
<br>
Enter username:
<input type="text" name="username" id="" required>
<input type="submit" value="UPDATE" name="up">


</form>
<br>

<form action="admin.php" method="POST">
<b>Delete existing student: </b>
<br>
Enter username:
<input type="text" name="username" id="">
<input type="submit" value="DELETE" name="del">
</form>
</html>


<?php
if(isset($_POST["del"]))
{
$user=@$_POST["username"];
$conn=mysqli_connect("localhost","root","","school");
$query = "SELECT * FROM sheet WHERE username='$user' "or die("cannot connect") ;
$results = mysqli_query($conn, $query) or die("Wrong query");

if(mysqli_num_rows($results) != 1){
    echo "Student doesn't exist.";
}
else{
    while ($row = mysqli_fetch_assoc($results)) {
        $name=$row['name'];
        $m1=$row['html'];
        $m2=$row['mysql'];
        $m3=$row['php'];
        $per=$row['percentage'];
        $status=$row['result'];
      }
    echo "DELETED DATA: <br>";
    echo "NAME: ".$name."<br>";
    echo "Marks in PHP: ".$m1."<br>";
    echo "Marks in SQL: ".$m2."<br>";
    echo "Marks in PHP: ".$m3."<br>";
    $sql=mysqli_query($conn,"DELETE FROM `sheet` WHERE`username`='$user'");
    
    if($sql)
    {
        echo "DELETION SUCCESSFULL";
    }
    else{
    
        echo "UNSUCCESSFULL";
    }
    
}
}
?>

<?php
    session_start();
if(isset($_POST['up'])){

    $_SESSION['u']=$_POST['username'];
    $user=$_SESSION['u'];
    $conn=mysqli_connect("localhost","root","","school");
    $query = "SELECT * FROM sheet WHERE username='$user' "or die("cannot connect") ;
    $results = mysqli_query($conn, $query) or die("Wrong query");

    if(mysqli_num_rows($results) != 1){
        echo "Student doesn't exist.";
}
else{
    echo "<script type='text/javascript'>;
            window.location='update.php';
            </script>";
}

}
?>