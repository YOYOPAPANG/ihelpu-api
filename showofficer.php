<?php 
    include 'conn.php';

    $officer_id = $_GET['officer_id'];

    $QueryResult = $connect->query("SELECT * FROM tb_officer WHERE officer_id = '".$officer_id."' ");

    $result = array();

    while($fetchData = $QueryResult -> fetch_assoc()){
        $result[] = $fetchData;
    }

    echo json_encode($result);
?>