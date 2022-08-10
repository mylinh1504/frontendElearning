<?php
	$gmail = $_POST['gmail'];
	$pass = $_POST['password'];
	$db = mysqli_connect("localhost", "root", "", "elearning");
	$sql = "select * from user where gmail= '$gmail' and pass= '$pass' ";
	$rs = mysqli_query($db, $sql);
	if (mysqli_num_rows($rs) > 0){
		header("location: ../monhoc.html");
	} else{
		echo "<h1>Đăng nhập không thành công</h1>";
		require_once 'login.html';
	}
?>