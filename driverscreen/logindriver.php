<?php

    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $db = "db_ihelpu";

    $conn = mysqli_connect($servername, $username, $password, $db);

    if(!$conn){
        die("Connection Failed : " . mysqli_connect_error());
    }

    $officer_username = $_POST['officer_username'];
    $officer_password = $_POST['officer_password'];



    $sql = "SELECT * FROM tb_officer WHERE officer_username = '".$officer_username."' AND officer_password = '".$officer_password."' ";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['officer_id'];
        }

        echo json_encode($id);
    } else {
        echo json_encode("Error");
    }
?>