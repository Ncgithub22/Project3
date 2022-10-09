<?php
$servername = "localhost";
$username = "root";
$password = "root1234";
$dbname = "db_nc";  //ชื่อฐานข้อมูล

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection fail/error/ผิดพลาด: " . mysqli_connect_error());
}

echo "Connected successfully/เชื่อมต่อสำเร็จ";
?>