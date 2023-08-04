<?php

include 'config.php';

$student_id = $_GET['id'];

$sql = "DELETE FROM student WHERE id = '{$student_id}'";


$result = mysqli_query($conn, $sql) or die("Query failed");

header("Location: http://localhost/PHP%20AND%20MYSQLI%20CRUID/");




?>