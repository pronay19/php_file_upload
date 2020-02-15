<html>
<head>
<title>PHP File Upload example</title>
</head>
<body>

<form action="fileupload.php" enctype="multipart/form-data" method="post">
Select a image to upload :
<input type="file" name="file">
<input type="submit" value="Upload" name="Submit1"> <br/>
</form>

<?php
  if(isset($_POST['Submit1']))
   { 
     $filepath = "images/" . $_FILES["file"]["name"];

  if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
   {
    echo "<img src=".$filepath." />";
   } 
  else 
   {
    echo "Error !!";
   }
 } 
 
?>

</body>
</html>