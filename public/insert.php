<?php
include "conectar_db.php";

$data=json_decode(file_get_contents("php://input"));


$name=$dbhandle->real_escape_string($data->name);
$lname=$dbhandle->real_escape_string($data->lname);
$area=$dbhandle->real_escape_string($data->area);
$role=$dbhandle->real_escape_string($data->role);
$payroll=$dbhandle->real_escape_string($data->payroll);

$query="INSERT INTO usuarios VALUES('".$name."','".$lname."', '".$area."', '".$role."', '".$payroll."')";

$dbhandle->query($query);
	

?>