<?php 
$stid= $_POST["sid"];
$st_name = $_POST["sname"];
$st_address = $_POST["saddress"];
$st_class = $_POST["sclass"];
$st_phone = $_POST["sphone"];


 $con = mysqli_connect("localhost","root","","yahoobabaa") or die("hellho failed");
 $sql = "UPDATE student SET sname='{$st_name}',saddress='{$st_address}',sphone='{$st_phone}' WHERE sid = {$stid}";
              
                       $result = mysqli_query($con,$sql) or die("qury unsucess");

                       header("Location: http://localhost/yahoo/crud_html/index.php");
                       mysqli_close($con);
?>
