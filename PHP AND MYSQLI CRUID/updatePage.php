<?php
include 'header.php';


?>

<div class="add_form mt-5">
<div class="container">
<div class="row">
<div class="col-lg-12">
    <h2 class="text-center mb-4">Update Data </h2>
    <?php
     include "config.php";
     $student_id = $_GET['id'];
     $sql = "SELECT * FROM student WHERE id = '{$student_id}'";
     $result = mysqli_query($conn, $sql) or die("Query failed");

     if(mysqli_num_rows($result) > 0) {  
        
        while($row = mysqli_fetch_assoc($result)) {

    
      ?>

    <table class="table table-bordered">   
<form action="update.php" method="post">
    <tr>
<input type="text" hidden class="form-control" value="<?php echo $row['id']; ?>" name="id">
<td><input type="text" class="form-control" value="<?php echo $row['stu_name']; ?>"  name="first_name"></td>
<td><input type="text" class="form-control" value="<?php echo $row['last_name']; ?>"  name="last_name"></td>
    </tr>

    <tr>
    <td><input type="Number" class="form-control" value="<?php echo $row['Age'];?>"  name="age"></td>
        <td><input type="text" value="<?php echo $row['City']; ?>"  class="form-control" name="city"></td>

    </tr>

    <tr>
        <td colspan="3"><input type="submit" class="btn btn-primary" value="submit"></td>
    </tr>


</form>


    </table>

    <?php
    }
}


?>
</div>

</div>
</div>



</div>








<script src="js/bootstrap.min.js" type="text/javascript"></script>


</body>
</html>