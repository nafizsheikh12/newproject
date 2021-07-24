<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php 
  

      $con = mysqli_connect("localhost","root","","yahoobabaa") or die("hellho failed");
      
      $sql = "SELECT * FROM student JOIN studentc WHERE student.sclass= studentc.cid";
      $result = mysqli_query($con,$sql) or die("qury unsucess");
      
     if(mysqli_num_rows($result) > 0){

      
    ?>
    <table cellpadding="7px">
        <thead>
           <tr> 
        <th> ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
        </thead>
        <tbody>
              <?php
              while($row = mysqli_fetch_assoc($result)){


            ?>
          
            <tr>
                <td><?php echo $row['sid'];?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress'];?></td>
                <td><?php echo $row['sclass'];?></td>
                <td><?php echo $row['sphone'];?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['sid']?>'>Delete</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
  <?php } ?>
</div>
</div>
</body>
</html>
