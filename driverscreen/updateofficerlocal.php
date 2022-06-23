
<?php 
	include '../conn.php';

	$officer_id = $_POST['officer_id'];
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];

		$connect->query("UPDATE tb_officer SET officer_locat='".$lat.",".$lng."' WHERE officer_id = '".$officer_id."' ");

?>