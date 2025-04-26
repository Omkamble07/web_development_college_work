<?php
session_start();

$uname = $_POST["uname"];
$pass = $_POST["passwd"];

// Hardcoded check (optional)
if ($uname == "omk" && $pass == "123") {
    $_SESSION["username"] = $uname;
    header("Location: secured.php");
    exit;
}

// Database check
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Very dangerous (SQL Injection risk!) but for now, fixing only your structure
$sql = "SELECT id FROM login WHERE username = '$uname' AND password = '$pass'";
$result = $conn->query($sql);

if ($result && $result->num_rows == 1) {
    $_SESSION["username"] = $uname;
    header("Location: secured.php");
    exit;
} else {
    header("Location: login.php");
    exit;
}

$conn->close();
?>
