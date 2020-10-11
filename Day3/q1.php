<html>
<body>
<p></p>
<form action="q1.php" method="POST">
Enter your name: <input type="text" name="name" placeholder="Enter name"><br>
Subject 1 marks: <input type="number" min="0" max=100 name="S1" placeholder="Enter marks"><br>
Subject 2 marks: <input type="number" min="0" max=100 name="S2" placeholder="Enter marks"><br>
Subject 3 marks: <input type="number" min="0" max=100 name="S3" placeholder="Enter marks"><br>
Subject 4 marks: <input type="number" min="0" max=100 name="S4" placeholder="Enter marks"><br>
Subject 5 marks: <input type="number" min="0" max=100 name="S5" placeholder="Enter marks"><br>
<input type="submit" value="Submit" name="b1"/>
</form>
</body>
</html>


<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","result") or die(mysqli_connect_error());
if(isset($_POST["b1"])){
    $name=$_POST["name"];
    $m1=$_POST["S1"];
    $m2=$_POST["S2"];
    $m3=$_POST["S3"];
    $m4=$_POST["S4"];
    $m5=$_POST["S5"];
    $tmo=$m1+$m2+$m3+$m4+$m5;
    $per=$tmo/5;
    $sql= "INSERT INTO class1(name,sub1,sub2,sub3,sub4,sub5,total_obtained,total_marks,percentage) values ('$name',$m1,$m2,$m3,$m4,$m3,$tmo,500,$per)";
    $write=mysqli_query($conn,$sql) or die(mysqli_error($conn));

    echo "Name of Student:".$name."<br>";
    echo "Marks in Each Subject:<br>";
    echo "Subject 1: ".$m1."<br>";
    echo "Subject 2: ".$m2."<br>";
    echo "Subject 3: ".$m3."<br>";
    echo "Subject 4: ".$m4."<br>";
    echo "Subject 5: ".$m5."<br>";
    echo "Total Marks Obtained: ".$tmo."<br>";
    echo "Percentage: ".$per."<br>";
}
?>