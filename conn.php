<?php 
        $connect = new mysqli("localhost","root","12345678","db_ihelpu");    
        if ($connect) {
        }else{
            echo "Connection Failed";
            exit();
        }
?>