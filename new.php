<?php
if(isset($_FILES["image"])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
     
     $file_name = $_FILES["image"]["name"];
     $file_tmp = $_FILES["image"]["tmp_name"];

    move_uploaded_file($file_tmp,"imagess/".$file_name);
}

?>


<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
  <form  method="post" enctype="multipart/form-data">
      Name : <input type="text" name="fname" /><br>

      Age : <input type="text" name="age"/><br>
     <input type="file" name="image" />
      <input type="submit" name="save"/>
  </form>
</body>
</html>

