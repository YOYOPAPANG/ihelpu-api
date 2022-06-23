<?php 

    include 'conn.php';

    $QueryResult = $connect->query("SELECT * FROM tbl_geography");

    $result = array();

    while($fetchData = $QueryResult -> fetch_assoc()){
        $result[] = $fetchData;
    }

    echo json_encode($result);

?>