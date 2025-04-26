<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');

$data = [
    ["name" => "Om Kamble", "email" => "om6925@gmail.com"],
    ["name" => "Jane Smith", "email" => "jane@example.com"]
];

echo json_encode($data);
?>
