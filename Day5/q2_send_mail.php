<html>
<h1>Feedback Form</h1>
<body>
<form action = "q2_send_mail.php" method="POST">
    Name:   <input type="text"  name="name" required><br><br>
    Mail Id:  <input type="email"  name="mail" required><br><br>
    Feedback:  <br>
    <textarea id="feedback" name="feedback" rows="4" cols="40" required></textarea><br><br>
    <input type="submit" value="Submit" name="b1"/>
 </form>
</body>
</html>

<?php
if(@$_POST['b1'])
{
    $name=@$_POST['name'];
    $to=@$_POST['mail'];
    $msg=@$_POST['feedback'];
    $subject="Feedback response";
    $from="From:siddeshshimpi00@gmail.com";
    mail($to,$subject,"Thanks for giving your feedback",$from);
    mail("shimpisidvi18it@student.mes.ac.in","Feedback of $name",$msg,$from);

    echo "Your feedback is sent.";
}
?>