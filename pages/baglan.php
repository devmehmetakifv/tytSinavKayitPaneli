<?php
$servername = "localhost";
$database = "admin_kullanicilar";
$username = "root";
$password = "I19v_da1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}
?>