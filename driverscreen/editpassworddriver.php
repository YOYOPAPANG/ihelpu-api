<?php 
	include '../conn.php';

	$officer_id = $_POST['officer_id'];
	$password = $_POST['officer_password'];
	$newpassword = $_POST['newpassword'];

	$sql = "SELECT * FROM tb_officer WHERE officer_id = '".$officer_id."' AND officer_password = '".$password."' ";
	$result = $connect->query($sql);

	if($result->num_rows > 0){

		$connect->query("UPDATE tb_officer SET officer_password = '".$newpassword."' WHERE officer_id = '".$officer_id."' ");
		echo json_encode("officer_id");

	}else{
		echo json_encode("Error");
	}
	
	
?>