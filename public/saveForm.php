<?php
include(conectar_db.php);
conectar_db();


    $newFName = $_POST['newFName'];
    $newLName  =$_POST['newLName']);
    $newArea =$_POST['newArea'];
    $newRole   =$_POST['newRole'];
    $newPayroll  =$_POST['newPayroll'];

echo $newFName.$newLName.$newArea
    
    $queryInsert="INSERT INTO usuarios (
    name,
    lname,
    area,
    role,
    payroll
    )
    VALUES(
    '".$newFName."',
    '".$newLName."',
    '".$newArea."',
    '".$newRole."',
    '".$newPayroll."');
    
    "; 
    $log .=  $queryInsert."<br>";
 
    //echo $log;
    //exit;
     
    mysql_query($queryInsert);
 
    
 
     
   
     
    //Cerrrar conexion a la BD
    mysql_close($link);
 
    // Mostrar resultado del registro
    ?>