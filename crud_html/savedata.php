<?php 
$st_name = $_POST["sname"];
$st_address = $_POST["saddress"];
$st_class = $_POST["class"];
$st_phone = $_POST["sphone"];


 $con = mysqli_connect("localhost","root","","yahoobabaa") or die("hellho failed");
                       $sql = "INSERT INTO student(sname, saddress, sclass, sphone) VALUES ('$st_name','$st_address','$st_class','$st_phone')";
                       $result = mysqli_query($con,$sql) or die("qury unsucess");

                       header("Location: http://localhost/yahoo/crud_html/index.php");
                       mysqli_close($con);
?>
