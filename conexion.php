<?php
// archivo de conexxion a la base de datos
$con=mysql_connect('localhost', 'root', 'sa');
            if(!$con)
            {
                echo 'ERROR AL CONECTAR LA BD';
                exit;
            }
mysql_select_db('comision');
?>