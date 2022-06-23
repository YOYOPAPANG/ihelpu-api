<?php 
    include '../conn.php';

    $officer_id = $_POST['officer_id'];
    $request_id = $_POST['request_id'];
    $officer_lat = $_POST['officer_lat'];
    $officer_lng = $_POST['officer_lng'];
    $request_status = $_POST['request_status'];

    if($connect->query("UPDATE tb_request SET request_status = '".$request_status."',officer_id = '".$officer_id."', officer_lat = '".$officer_lat."',officer_lng = '".$officer_lng."' WHERE request_id = '".$request_id."' ") == true){
        $connect->query("UPDATE tb_officer SET request_id = '".$request_id."', WHERE officer_id = '".$officer_id."' ");
    }

?>