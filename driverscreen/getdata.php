<?php
include '../conn.php';

 $request_id = $_GET['request_id'];

 $queryResult = $connect->query("SELECT *,tb_request.request_id as request_id_prime FROM tb_request INNER JOIN tb_officer on tb_officer.officer_id = tb_request.officer_id INNER JOIN tb_user on tb_user.user_id = tb_request.user_id  WHERE tb_request.request_id = '$request_id' ");

	$result = array ();

while ($fetchData = $queryResult->fetch_assoc()) {
    $result[] = $fetchData;
}
echo json_encode($result);
?>