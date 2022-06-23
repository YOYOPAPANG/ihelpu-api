<?php
    // ไม่ใช้แล้ว XXXX
    include 'conn.php';

    $SearchName = $_GET['SearchName'];

    $QueryResult = $connect->query("SELECT * FROM tb_hospital WHERE hospital_name like '%$SearchName%' ");

    $result = array();

    while($fetchData = $QueryResult -> fetch_assoc()){
        $result[] = $fetchData;
    }

    echo json_encode($result);
?>