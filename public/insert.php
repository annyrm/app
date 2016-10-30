<?php
//include "conectar_db.php";

//$data=json_decode(file_get_contents("php://input"));


/*$name=$dbhandle->real_escape_string($data->name);
$lname=$dbhandle->real_escape_string($data->lname);
$area=$dbhandle->real_escape_string($data->area);
$role=$dbhandle->real_escape_string($data->role);
$payroll=$dbhandle->real_escape_string($data->payroll);*/

//$query="INSERT INTO usuarios VALUES('".$name."','".$lname."', '".$area."', '".$role."', '".$payroll."')";

//$dbhandle->query($query);
	
$data=json_decode($_POST['enviado'], true);
var_dump($data);

$server="localhost";
$username="root";
$pass="";
$db="flexapp";

$link = new mysqli($server, $username, $pass, $db);
if($link->connect_error){
    die("Connection failed: ". $link->connect_error);
}
if($link->query("INSERT INTO usuarios VALUES" . "('" . $data['name']."', '" .$data['lname']."','".$data['area']. "','" .$data['role']."','" .$data['payroll']."')") === TRUE) {
    echo "OK";
} else {
    echo "FALLO";
}
$link->close();

?>