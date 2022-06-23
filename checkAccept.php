<?php 
    include 'conn.php';

    $user_id = $_GET['user_id'];

    $QueryResult=$connect -> query("SELECT * FROM tb_request WHERE user_id = $user_id ORDER BY request_id DESC");

    $result = array();

    while($fetchData = $QueryResult -> fetch_assoc()){
        $result[] = $fetchData;
    }

    echo json_encode($result);
?>