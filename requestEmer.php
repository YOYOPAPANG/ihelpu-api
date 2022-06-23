<?php 
    $db = mysqli_connect('localhost','root','12345678','db_ihelpu');
	if (!$db) {
		echo "Database connection faild";
	}

    // $requestEmer = $_GET[''];
    $request_type = $_GET['request_type'];
    $request_time = $_GET['request_time'];
    $user_lat = $_GET['user_lat'];
    $user_lng = $_GET['user_lng'];
    $request_status = $_GET['request_status'];
    $user_id  = $_GET['user_id'];

    $db->query("INSERT INTO tb_request (request_type, request_time, user_lat,user_lng, request_status, user_id) 
    VALUES('".$request_type."', '".$request_time."', '".$user_lat."','".$user_lng."', '".$request_status."', '".$user_id."')");

    // $queryResult = $connect->query("SELECT * FROM tb_request WHERE user_id = '$user_id' ORDER BY request_id DESC LIMIT 1");

    // $result = array ();
	
	// 	while ($fetchData = $queryResult->fetch_assoc()) {
	// 		$result[] = $fetchData;
	// 	}
	
	// 	echo json_encode($result);

?>