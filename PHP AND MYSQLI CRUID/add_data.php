<?php

include 'config.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$age = $_POST['age'];
$city = $_POST['city'];

$sql = "INSERT INTO student(stu_name, last_name, Age, City) VALUES('$first_name', '$last_name', $age, '$city')";


if(mysqli_query($conn, $sql)) {
    header('Location: http://localhost/PHP%20AND%20MYSQLI%20CRUID/');
}else{
    echo "<h2>No Record Insert</h2>";
}



?>