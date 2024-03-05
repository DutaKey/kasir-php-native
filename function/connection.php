<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$database = "db_kasir";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
