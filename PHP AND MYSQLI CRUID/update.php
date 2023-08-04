
<?php

include 'config.php';
$student_id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$city = $_POST['city'];

$sql = "UPDATE student SET stu_name = '{$first_name}', last_name = '{$last_name}', Age = '{$age}', City = '{$city}' WHERE id = '{$student_id}'";


$result = mysqli_query($conn,  $sql) or die("Query failed");
    header('Location: http://localhost/PHP%20AND%20MYSQLI%20CRUID/');


?>











