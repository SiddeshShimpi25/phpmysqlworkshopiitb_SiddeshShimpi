<!DOCTYPE html>
<form action="q3_file_upload.php" method="POST" enctype="multipart/form-data" >
Select a file:
<input type="file" name="file"><br>
<input type="submit" value="Upload" name="b1"/>
</form>
</body>
</html>
<?php
if(isset($_POST['b1'])){
    echo "FILE NAME: ".$_FILES["file"]["name"]."<br>";
    echo "FILE TYPE: ".$_FILES["file"]["type"]."<br>";
    echo "FILE SIZE: ".$_FILES["file"]["size"]." bytes <br>";
}
?>
