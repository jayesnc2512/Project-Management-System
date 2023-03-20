<?php
$host = "localhost";  
$user = "root";  
$password = 'jayesh@2512';  
$db_name = "miniproject";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}
// session_start();
$username = $_GET['username'];
header("location:log-sheet.php?username=$username");



?>