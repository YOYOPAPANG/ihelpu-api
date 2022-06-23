<?php 

    include 'conn.php';

    $geography_id = $_GET['provinces'];

    $QueryResult = $connect->query("SELECT * FROM tbl_provinces WHERE geo_id = $geography_id");

    $result = array();

    while($fetchData = $QueryResult -> fetch_assoc()){
        $result[] = $fetchData;
    }

    echo json_encode($result);

?>