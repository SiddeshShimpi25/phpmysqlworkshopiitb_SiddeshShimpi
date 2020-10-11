<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="POST">
  Name: <input type="text" name="name" required/><br />
  Username: <input type="text" name="username" required/><br />
  Password: <input type="password" name="password" required/><br />
  Confirm password: <input type="password" name="password_confirm" required/><br />
  <input type="submit" value="Register" name="b1"/>
</form>
</body>
</html>

<?php

$data = $_POST;
if (isset($_POST['b1'])){
if ($data['password'] !== $data['password_confirm']) {
   die('Password and Confirm password should match!');   
}
else{

    error_reporting(0);
    $conn = mysqli_connect("localhost","root","","school") or die(mysqli_connect_error());
    $name=$data['name'];
    $username=$data['username'];
    $password=md5($data['password']);
    if($conn){
       $sql= "INSERT INTO student values ('$name','$username','$password')";
       $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
       echo "<script type='text/javascript'>alert('New user Added');
       window.location='s_login.php';
       </script>";
    }


}
}
?>