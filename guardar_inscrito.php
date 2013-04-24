<?php
$n1=$_POST['nombre1'];
$n2=$_POST['nombre2'];
$pa=$_POST['paterno'];    
$ma=$_POST['materno'];
$ci=$_POST['ci'];
include('conexion.php');
    $sql= "INSERT INTO tbl_funcionario (nombre1,nombre2,paterno,materno,ci) VALUES ('$n1','$n2','$pa','$ma','$ci')";
mysql_query($sql);      
?>
<h3>SE CREO EL NUEVO INSCRITO CORRECTAMENTE</h3>
<a href="index.php">ACEPTAR</a>
