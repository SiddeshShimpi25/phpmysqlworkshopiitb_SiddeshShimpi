<?php
session_start();
$username=$_SESSION['username'];
error_reporting(0);
$conn = mysqli_connect("localhost","root","","school") or die(mysqli_connect_error());
$extract = mysqli_query($conn,"SELECT * FROM sheet WHERE username='$username'");

while ($row = mysqli_fetch_assoc($extract)) {
    $name = $row['name'];
    $m1 = $row["html"];
    $m2 = $row["mysql"];
    $m3 = $row["php"];
    $per = $row['percentage'];
    $res = $row['result'];

    if($res=='P'){
        $res='Pass';
    }
    else{
        $res='Fail';
    }
}
?>

<html>
<br>
<h2><?php if($res=='Pass'){echo "Congratulations";} ?></h2>
<table border="2" style="border-collapse: collapse; width: 50%;">
<tbody>
<tr style="height: 27px;">
<td style="width: 33.3333%; height: 27px;">Name</td>
<td style="width: 33.3333%; height: 27px;">Subject</td>
<td style="width: 29.3578%; height: 27px;">Marks</td>
</tr>
<tr style="height: 58px;">
<td style="width: 33.3333%; height: 168px;" rowspan="3"><?php echo $name ?></td>
<td style="width: 33.3333%; height: 58px;">HTML</td>
<td style="width: 29.3578%; height: 58px;"><?php echo $m1; ?></td>
</tr>
<tr style="height: 56px;">
<td style="width: 33.3333%; height: 56px;">PHP</td>
<td style="width: 29.3578%; height: 56px;"><?php echo $m2; ?></td>
</tr>
<tr style="height: 54px;">
<td style="width: 33.3333%; height: 54px;">MySQL</td>
<td style="width: 29.3578%; height: 54px;"><?php echo $m3; ?></td>
</tr>
<tr style="height: 74px;">
<td style="width: 33.3333%; height: 74px;">Percentage</td>
<td style="width: 62.6911%; height: 74px;" colspan="2"><?php echo $per."%"; ?></td>
</tr>
<tr style="height: 84px;">
<td style="width: 33.3333%; height: 84px;">Result</td>
<td style="width: 62.6911%; height: 84px;" colspan="2"><strong><?php echo $res; ?></strong></td>
</tr>
</tbody>
</table>
<p></p>

<form action="student.php" method="POST">
    
    Enter your parents email id:
    <input type="email" name="email" id="">

    <input type="submit" value="SEND" name="send">

</form>
</html>


<?php
if(isset($_POST["send"]))
{
    $email=$_POST['email'];   
    $subject='Marksheet of '.$name;
    
    //adding html table in message
    $message='<html>
    <table border="1" style="border-collapse: collapse; width: 50%;">
    <tbody>
    <tr style="height: 27px;">
    <td style="width: 33.3333%; height: 27px;">Name</td>
    <td style="width: 33.3333%; height: 27px;">Subject</td>
    <td style="width: 29.3578%; height: 27px;">Marks</td>
    </tr>
    <tr style="height: 58px;">
    <td style="width: 33.3333%; height: 168px;" rowspan="3">'.$name.'</td>
    <td style="width: 33.3333%; height: 58px;">HTML</td>
    <td style="width: 29.3578%; height: 58px;">'.$m1.'</td>
    </tr>
    <tr style="height: 56px;">
    <td style="width: 33.3333%; height: 56px;">PHP</td>
    <td style="width: 29.3578%; height: 56px;">'.$m2.'</td>
    </tr>
    <tr style="height: 54px;">
    <td style="width: 33.3333%; height: 54px;">MySQL</td>
    <td style="width: 29.3578%; height: 54px;">'.$m3.'</td>
    </tr>
    <tr style="height: 74px;">
    <td style="width: 33.3333%; height: 74px;">Percentage</td>
    <td style="width: 62.6911%; height: 74px;" colspan="2">'.$per.'%</td>
    </tr>
    <tr style="height: 84px;">
    <td style="width: 33.3333%; height: 84px;">Result</td>
    <td style="width: 62.6911%; height: 84px;" colspan="2"><strong>'.$res.'</strong></td>
    </tr>
    </tbody>
    </table>
    <p></p>
    </html>';
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    mail($email,$subject,$message,$headers);
}
?>


