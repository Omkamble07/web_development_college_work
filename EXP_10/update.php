<?php
    include('connection.php');
    $id = $_POST['id'];
    $name = $_POST['name']; 
    $mark = $_POST['mark'];

    $query = "UPDATE dkte SET name = '$name',marks = '$mark' WHERE id = '$id'";
    mysqli_query($con,$query);

    header('Location:index.php');
?>