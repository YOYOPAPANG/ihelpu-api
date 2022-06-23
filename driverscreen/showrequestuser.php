<?php 

	include '../conn.php';

	$queryResult=$connect -> query("SELECT * FROM tb_request INNER JOIN tb_user on tb_user.user_id = tb_request.user_id WHERE request_status ='2' AND request_status_data ='1' ORDER BY request_id DESC ");

	$result = array ();

	while ($fetchData = $queryResult->fetch_assoc()) {
		$result[] = $fetchData;
	}

	echo json_encode($result);

?>