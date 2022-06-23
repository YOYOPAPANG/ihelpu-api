<?php 
    include 'conn.php';

    $user_id = $_POST['user_id'];
    $request_status_data = $_POST['request_status_data'];
    $request_type = $_POST['request_type'];
    $request_time = $_POST['request_time'];
    $request_locat = $_POST['request_locat'];
    
    $QueryResult=$connect -> query("SELECT request_id FROM tb_request WHERE user_id = $user_id ORDER BY request_id DESC");

    $result = array();

    while($fetchData = $QueryResult -> fetch_assoc()){
        $result[] = $fetchData;
    }

    $connect->query("UPDATE tb_request SET request_status_data = '".$request_status_data."' WHERE request_id = '".$result[0]['request_id']."' ");

    // $connect->query("INSERT INTO tb_request (request_type, request_time, request_locat, request_status, user_id) 
    // VALUES('".$request_type."', '".$request_time."', '".$request_locat."', '".$request_status."', '".$user_id."')");

    // $sql = "SELECT * FROM tb_request WHERE user_id = $user_id ORDER BY request_id DESC, request_time DESC LIMIT 1";

?>