<?php 

    include 'conn.php';

    

    $result = array();

    while($fetchData = $QueryResult -> fetch_assoc()){
        $result[] = $fetchData;
    }

    echo json_encode($result);

?>