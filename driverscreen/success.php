<?php 
	include '../conn.php';
	$request_id = $_GET['request_id'];

		$connect->query("UPDATE tb_request SET request_status= 0  where request_id=$request_id");

?>