<?php
include "conectar_db.php";

$query = "SELECT * FROM usuarios";
$rs=$dbhandle->query($query);

while($row=$rs->fetch_assoc()){
$data[]=$row;
}

print json_encode($data);
?>