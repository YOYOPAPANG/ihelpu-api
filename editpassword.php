<?php 
	include 'conn.php';

	$user_id = $_POST['user_id'];
	$password = $_POST['user_password'];
	$newpassword = $_POST['newpassword'];

	$sql = "SELECT * FROM tb_user WHERE user_id = '".$user_id."' AND user_password = '".$password."' ";
	$result = $connect->query($sql);

	if($result->num_rows > 0){

		$connect->query("UPDATE tb_user SET user_password = '".$newpassword."' WHERE user_id = '".$user_id."' ");
		echo json_encode("user_id");

	}else{
		echo json_encode("Error");
	}
	
	
?>