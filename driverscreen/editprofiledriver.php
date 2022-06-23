<?php 
	include '../conn.php';

	$officer_id = $_POST['officer_id'];
	$dfname = $_POST['dfname'];
	$organiname = $_POST['organiname'];
    	$dtel = $_POST['dtel'];
    	$demail = $_POST['demail'];

    	
	// $officer_images="";
    if($_FILES["officer_images"]["name"] != ""){
        $datetime=date("dmYHis");
        $file_name=substr($_FILES['officer_images']['name'],-4);
        $officer_images=$datetime.'_driver'.$file_name;
        move_uploaded_file($_FILES["officer_images"]["tmp_name"],"../upload/".$officer_images);  
        $connect->query("UPDATE tb_officer SET officer_fullname = '".$dfname."', organi_name = '".$organiname."', officer_tel = '".$dtel."',
	 officer_email = '".$demail."' ,officer_images='".$officer_images."' WHERE officer_id = '".$officer_id."' ");
    
    }else{
       $connect->query("UPDATE tb_officer SET officer_fullname = '".$dfname."', organi_name = '".$organiname."', officer_tel = '".$dtel."',
	 officer_email = '".$demail."' WHERE officer_id = '".$officer_id."' ");
    }  





?>