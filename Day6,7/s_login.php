<html>
<h1>Student Login.</h1>
<body>
    <form action="s_login.php" method="POST">
    Username: <input type="text"  name="user" placeholder="Enter username" required><br>
    Password: <input type="password"  name="pass" placeholder="Enter password" required><br><br>
    <input type="submit" value="Login" name="b1"/>
    </form>
    <form action="s_register.php" method="POST">
    <input type="submit" value="Register" name="r1"/>
    </form>
</body>
</html>


<?php
    session_start();
    if (isset($_POST['b1'])){
        $user=$_POST['user'];
        $password=md5($_POST['pass']);
        error_reporting(0);
        $conn = mysqli_connect("localhost","root","","school") or die(mysqli_connect_error());
        $query = "SELECT * FROM student WHERE username='$user' AND password='$password'";
  	    $results = mysqli_query($conn, $query);
  	if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $user;
          echo "<script type='text/javascript'>alert('You are logged in');
            window.location='student.php';
            </script>";
        }   
    else{
        echo "User doesnt exists.";
    }
        
        
        
    }

    
?>
