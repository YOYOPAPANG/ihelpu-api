<?php
include '../conn.php';

 $officer_id = $_GET['officer_id'];

 $queryResult = $connect->query("SELECT * FROM tb_officer WHERE officer_id = '$officer_id' ");

	$result = array ();

while ($fetchData = $queryResult->fetch_assoc()) {
    $result[] = $fetchData;
}
echo json_encode($result);
?>