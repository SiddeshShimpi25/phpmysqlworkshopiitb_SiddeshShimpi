<html>
<h1>Admin Login.</h1>
<body>
    <form action="a_login.php" method="POST">
    Username: <input type="text"  name="user" placeholder="Enter username" required><br>
    Password: <input type="password"  name="pass" placeholder="Enter password" required><br><br>
    <input type="submit" value="Login" name="b1"/>
    </form>
</body>
</html>


<?php

if(isset($_POST['b1'])){
    $u=$_POST['user'];
    $p=md5($_POST['pass']);
    if($u=='admin' && $p=='25e4ee4e9229397b6b17776bfceaf8e7'){
        echo "<script type='text/javascript'>alert('You are logged in');
            window.location='admin.php';
            </script>";
    }
    else{
        echo "invalid username or password";
    }
}
?>