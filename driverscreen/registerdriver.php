<?php
	$db = mysqli_connect('localhost','root','12345678','db_ihelpu');
	if (!$db) {
		echo "Database connection faild";
	}

	$officer_fullname = $_POST['officer_fullname'];
	$officer_tel = $_POST['officer_tel'];
	$organi_name = $_POST['organi_name'];
	$officer_username = $_POST['officer_username'];
	$officer_password = $_POST['officer_password'];
    $officer_email = $_POST['officer_email'];


	$db->query("INSERT INTO tb_officer (officer_fullname,officer_tel,organi_name,officer_username,officer_password,officer_email) 
    VALUES('".$officer_fullname."','".$officer_tel."','".$organi_name."','".$officer_username."',
    '".$officer_password."','".$officer_email."')");


?>
