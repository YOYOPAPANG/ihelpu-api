<?php
//Connect MSSQL
$serverName = '127.0.0.1';
$userName = 'root';
$userPassword = '12345678';
$dbName = 'db_ihelpu';

try{
	$conn = new PDO("sqlsrv:server=$serverName ; Database = $dbName", $userName, $userPassword);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
	die(print_r($e->getMessage()));
}

//การ query และแสดงข้อมูล จัดเรียงตามฟิวด์ field1 แบบมากไปน้อย เริ่มที่เรคคอร์ดที่ 0-100
$query = " SELECT * FROM tbl_provinces  ";
$getRes = $conn->prepare($query);
$getRes->execute();

while($row = $getRes->fetch( PDO::FETCH_ASSOC ))
{
echo $row['province_code']."<br />";
echo $row['province_name']."<br />";
}
?>