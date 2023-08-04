<?php
include 'header.php';


?>

<div class="add_form mt-5">
<div class="container">
<div class="row">
<div class="col-lg-12">
    <h2 class="text-center mb-4">Add Form Data</h2>
    <table class="table table-bordered">   
<form action="add_data.php" method="post">
    <tr>
<td><input type="text" class="form-control" name="first_name" placeholder="Please enter last name..."></td>
<td><input type="text" class="form-control" name="last_name" placeholder="Please enter last name..."></td>
    </tr>

    <tr>
    <td><input type="Number" class="form-control" name="age" placeholder="Please enter your age.."></td>
        <td><input type="text" class="form-control" name="city" placeholder="Please enter your city..."></td>

    </tr>

    <tr>
        <td colspan="3"><input type="submit" class="btn btn-primary" value="submit"></td>
    </tr>


</form>


    </table>
</div>

</div>
</div>



</div>








<script src="js/bootstrap.min.js" type="text/javascript"></script>


</body>
</html>