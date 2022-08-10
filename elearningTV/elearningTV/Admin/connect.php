<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db = "elearning";
$conn = mysqli_connect($hostname, $username, $password,$db);
if (!$conn) {
 die('Không thể kết nối: ' . mysqli_error($conn));
 exit();
}
echo 'Kết nối thành công';
mysqli_close($conn);
?>