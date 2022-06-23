<?php 
    include 'conn.php';

    $user_id = $_POST['user_id'];
    $user_fullname = $_POST['user_fullname'];
    $user_date = $_POST['user_date'];
    $user_weight = $_POST['user_weight'];
    $user_height = $_POST['user_height'];
    $user_allergy = $_POST['user_allergy'];
    $user_tel = $_POST['user_tel'];
    $urelat_fname = $_POST['urelat_fname'];
    $relation = $_POST['relation'];
    $relation_tel = $_POST['relation_tel'];
    $user_email = $_POST['user_email'];
    $user_address = $_POST['user_address'];


    $user_images="";
    if($_FILES["user_images"]["name"] != ""){
        $datetime=date("dmYHis");
        $file_name=substr($_FILES['user_images']['name'],-4);
        $user_images=$datetime.'_profile'.$file_name;
        move_uploaded_file($_FILES["user_images"]["tmp_name"],"upload/".$user_images); 
        $connect->query("UPDATE tb_user SET user_fullname = '".$user_fullname."', user_date = '".$user_date."', user_weight = '".$user_weight."', user_height = '".$user_height."',
        user_allergy = '".$user_allergy."', user_tel = '".$user_tel."', urelat_fname = '".$urelat_fname."', relation = '".$relation."', relation_tel = '".$relation_tel."',
        user_email = '".$user_email."', user_address = '".$user_address."', user_images='".$user_images."' WHERE user_id = '".$user_id."' ");
    }else{
        $connect->query("UPDATE tb_user SET user_fullname = '".$user_fullname."', user_date = '".$user_date."', user_weight = '".$user_weight."', user_height = '".$user_height."',
        user_allergy = '".$user_allergy."', user_tel = '".$user_tel."', urelat_fname = '".$urelat_fname."', relation = '".$relation."', relation_tel = '".$relation_tel."',
        user_email = '".$user_email."', user_address = '".$user_address."' WHERE user_id = '".$user_id."' ");
    }  

?>