<?php 

    include 'conn.php';

    $QueryResult = $connect->query("SELECT * FROM tb_hospital ORDER BY CONVERT (hospital_name USING tis620) ASC ");

    $result = array();

    while($fetchData = $QueryResult -> fetch_assoc()){
        $result[] = $fetchData;
    }

    echo json_encode($result);

?>