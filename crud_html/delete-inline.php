<?php

echo $stid= $_GET['id'];

$con = mysqli_connect('localhost','root','','yahoobabaa');

$sql = "DELETE FROM `student` WHERE sid={$stid}";

$result = mysqli_query($con,$sql)or die("query failed");

   header("Location: http://localhost/yahoo/crud_html/index.php");
mysqli_close($con);
?>
