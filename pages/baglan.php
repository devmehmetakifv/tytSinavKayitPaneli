<?php
$servername = "localhost";
$database = "admin_kullanicilar";
$username = "kullaniciadi";
$password = "sifre";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}
?>
