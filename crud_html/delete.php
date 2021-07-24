<?php include 'header.php'; ?>
 <?php
    if(isset($_POST['deletebtn'])){
          $conn = mysqli_connect("localhost","root","","yahoobabaa")or die('hee');
     
          $sid= $_POST["sid"];
          $sql = "DELETE FROM `student` WHERE sid={$sid}";
           $result= mysqli_query($conn,$sql)or die('hel');
          header("Location: http://localhost/yahoo/crud_html/index.php");
                       mysqli_close($conn);
                   };
    ?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
   
</div>
</div>
</body>
</html>
