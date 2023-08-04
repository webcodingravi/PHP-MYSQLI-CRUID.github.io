<?php
include 'header.php';


?>


<div class="table">
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-6 col-12">

    <h2>PHP & SQL CRUD</h2>
      <?php
        include 'config.php';
        $limit = 4;
        if(isset($_GET['page'])) {
          $page = $_GET['page'];
        }else {
          $page = "";
        }
        $offset = ($page - 1) * $limit;
       $sql = "SELECT * FROM student LIMIT {$offset}, {$limit}";
       $result = mysqli_query($conn, $sql) or die("Query failed");
      
       if(mysqli_num_rows($result) > 0) {    

        ?>

      <table class="table table-bordered">
      <tr>
    
      <td colspan="7">
        <a href="add_form.php"><button class="btn btn-primary" style="margin-left: 27rem;">Add Data</button></a>
      </td>
 
      </tr>
     
      <tr>
        <th>S.NO</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>AGE</th>
        <th>CITY</th>
        <th>UPDATE</th>
        <th>DELETE</th>
      </tr>

     <?php 
       while($row = mysqli_fetch_assoc($result)) {

     ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['stu_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        <td><?php echo $row['Age']; ?></td>
        <td><?php echo $row['City']; ?></td>
        <td><a href="updatePage.php?id=<?php echo $row['id']; ?>"><button type="button" value="<?php echo $row['id'];?>" class="btn btn-primary btn-sm">Update</button></a></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>"><button type="button" value="<?php echo $row['id'];?>" class="btn btn-danger btn-sm">Delete</button></a></td>
      </tr>
      
   
    <?php
 }

?>

      </table>

      <?php
       $sql1 = "SELECT * FROM student";

       $result1 = mysqli_query($conn, $sql1) or die("Query filed");

        if(mysqli_num_rows($result1) > 0) {
           $total_records = mysqli_num_rows($result1);
           $total_page = ceil($total_records /  $limit);
          

           echo ' <ul class="pagination">';
       
          if($page > 1){
            echo  '<li class="page-item"><a class="page-link" href="index.php?page='.($page - 1).'">Previous</a></li>';
          }
           for($i = 1; $i <= $total_page; $i++) {
            if($i == $page) {
              $active = "active";
            }else {
              $active = "";
            }
            echo '<li class="page-item '.$active.'"><a class="page-link" href="index.php?page='.$i.'">'.$i.'</a></li>';
           }

           if($total_page > $page) {
            echo '<li class="page-item"><a class="page-link" href="index.php?page='.($page + 1).'">Next</a></li>';
           }

        
           echo '</ul>';

        }


      ?>


      <?php

} else{
  echo "No Record Found";
}
?>
      
</div>

</div>
</div>
</div>



