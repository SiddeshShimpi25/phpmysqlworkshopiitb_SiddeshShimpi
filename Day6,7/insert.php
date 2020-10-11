<html>
<h1>New Student.</h1>
<body>
    <form action="insert.php" method="POST">
    Name: <input type="text"  name="name" placeholder="Enter username" required><br>
    Username: <input type="text"  name="username" placeholder="Enter username" required><br>
    HTML marks: <input type="number"  min=0 max=100 name="m1" placeholder="Enter marks" required><br>
    SQL marks: <input type="number"  min=0 max=100 name="m2" placeholder="Enter marks" required><br>
    PHP marks: <input type="number"  min=0 max=100 name="m3" placeholder="Enter marks" required><br>
    <br>
    <input type="submit" value="INSERT" name="b1"/>
    </form>
</body>
</html>

<?php
if(isset($_POST['b1'])){
    error_reporting(0);
    $conn = mysqli_connect("localhost","root","","school") or die(mysqli_connect_error());
    $name=@$_POST['name'];
    $username=@$_POST['username'];

    $query = "SELECT * FROM sheet WHERE username='$username' ";
    $results = mysqli_query($conn, $query);
if (mysqli_num_rows($results) >= 1) {
    echo "Username already exists.";
  }
else{
    $html=@$_POST['m1'];
    $sql=@$_POST['m2'];
    $php=@$_POST['m3'];
    $per=($html+$sql+$php)/3;

    if ($per>=60){
        $res='P';
    }
    else{
        $res='F';
    }

    if($conn){
       $sql= "INSERT INTO sheet values ('$name','$username',$html,$sql,$php,$per,'$res')";
       $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
       if($result){
           echo 'Inserted Succesfully.';
       }
       else{
           echo 'Insertion Failed';
       }

    }

}
    
}

?>