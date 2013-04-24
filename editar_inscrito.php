<?php
$id=$_POST['id'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$nombre=$_POST['nombre'];
$ci=$_POST['ci'];
include('conexion.php');
        $sql="UPDATE tbl_registro SET paterno='$paterno', materno='$materno', nombres='$nombre', cedula_identidad='$ci' WHERE (id='$id')";
mysql_query($sql);      
?>
<h3>SE CAMBIO LOS DATOS DE INSCRITO CORRECTAMENTE</h3>
<a href="muestra_inscrito.php">ACEPTAR</a>
