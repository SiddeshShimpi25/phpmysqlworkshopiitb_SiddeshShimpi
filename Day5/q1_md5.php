<html>
<h1>Md5 Encryption</h1>
<body>
    <form action="q1_md5.php" method="POST">
    Username: <input type="text"  name="user" placeholder="Enter username" required><br>
    Password: <input type="password"  name="pass" placeholder="Enter password" required><br><br>
    <input type="submit" value="Submit" name="b1"/>
    </form>
</body>
</html>


<?php

    error_reporting(0);
    $conn = mysqli_connect("localhost","root","","data1") or die(mysqli_connect_error());
if(isset($_POST['b1'])){
    
    $username=$_POST['user'];

    $password=$_POST['pass'];
    $password=md5($password,TRUE);

    if($conn){
        $sql= "SELECT * FROM creds WHERE Username = '$username'";
        $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    if(mysqli_num_rows($result)!=0)
       {
  
            echo "Username already exists";
       }
    else
        { 
            $write = mysqli_query($conn,"INSERT INTO creds VALUES('$username','$password')") or die(mysqli_error($conn));
            echo "You have registered sucessfully.";
        }
    }
}
?>