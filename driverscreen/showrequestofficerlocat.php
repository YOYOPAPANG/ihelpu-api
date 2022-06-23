<?php 

	include '../conn.php';

	$officer_id = $_GET['officer_id'];

	$queryResult=$connect -> query("SELECT * FROM tb_request INNER JOIN tb_officer on tb_officer.officer_id = tb_request.officer_id WHERE tb_officer.officer_id = '$officer_id' AND request_status_data ='1' ORDER BY tb_request.request_id DESC LIMIT 1");

	$result = array ();

	while ($fetchData = $queryResult->fetch_assoc()) {
		$result[] = $fetchData;
	}

	echo json_encode($result);

?>