<?php
//database settings
$server="localhost";
$username="root";
$pass="";
$db="flexapp";

$mysqli = new mysqli($server, $username, $pass, $db);

$respuesta = array();
if($result = $mysqli->query("SELECT * FROM usuarios")){
    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
        $respuesta[] = $row;
    }
    echo json_encode(array("resultado"=>$respuesta));
}

$result->close();
$mysqli->close();
?>