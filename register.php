<?php
	$db = mysqli_connect('localhost','root','12345678','db_ihelpu');
	if (!$db) {
		echo "Database connection faild";
	}

	$user_fullname = $_POST['user_fullname'];
	$user_sex = $_POST['user_sex'];
    $user_date = $_POST['user_date'];
    $user_weight = $_POST['user_weight'];
    $user_height = $_POST['user_height'];
    $user_allergy = $_POST['user_allergy'];
	$user_address = $_POST['user_address'];
	$user_tel = $_POST['user_tel'];
	$urelat_fname = $_POST['urelat_fname'];
	$relation = $_POST['relation'];
    $relation_tel = $_POST['relation_tel'];
	$user_username = $_POST['user_username'];
	$user_password = $_POST['user_password'];
    $user_email = $_POST['user_email'];


	$db->query("INSERT INTO tb_user (user_fullname,user_sex,user_date,
    user_weight,user_height,user_allergy,user_address,user_tel,
    urelat_fname,relation,relation_tel,user_username,user_password,user_email) 
    VALUES('".$user_fullname."','".$user_sex."','".$user_date."','".$user_weight."',
    '".$user_height."','".$user_allergy."','".$user_address."','".$user_tel."',
    '".$urelat_fname."','".$relation."','".$relation_tel."','".$user_username."',
    '".$user_password."','".$user_email."')");


?>
