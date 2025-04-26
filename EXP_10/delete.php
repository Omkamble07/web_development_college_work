<?php 
    include('connection.php');
    $id = $_GET['id'];
    $query = "DELETE FROM dkte WHERE id = '$id'";
    mysqli_query($con,$query);

    header('Location:index.php');
?>