<?php 

    include 'conn.php';

        $SearchName = $_GET['SearchName'];

        if($SearchName != ''){
        $QueryResult = $connect->query("SELECT * FROM tb_emergencycall WHERE emercall_name like '%$SearchName%'
        or emercall_tel like '%$SearchName%' ");
        }else{
            $QueryResult = $connect->query("SELECT * FROM tb_emergencycall");
        }

        $result = array();

        while($fetchData = $QueryResult -> fetch_assoc()){
            $result[] = $fetchData;
        }

        echo json_encode($result);

?>