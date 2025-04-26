<?php 
include('connection.php');
$name = $_POST["name"];
$mark = $_POST["mark"];

$query = "INSERT INTO dkte(name,marks) VALUES ('$name','$mark')";
mysqli_query($con, $query);
header("Location:index.php");
?>