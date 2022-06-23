<?php

    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $db = "db_ihelpu";

    $conn = mysqli_connect($servername, $username, $password, $db);

    if(!$conn){
        die("Connection Failed : " . mysqli_connect_error());
    }

    $user_username = $_POST['user_username'];
    $user_password = $_POST['user_password'];



    $sql = "SELECT * FROM tb_user WHERE (user_username = '".$user_username."' or user_tel = '".$user_username."') AND user_password = '".$user_password."'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $id = $row['user_id'];
        }

        echo json_encode($id);
    } else {
        echo json_encode("Error");
    }
?>