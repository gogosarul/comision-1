<!DOCTYPE html>
<html>
    <head>
        <title>SISTEMA DE INSCRIPCIONES</title> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/botones.css"/>
        <link rel="stylesheet" type="text/css" href="css/barramenu.css"/>
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script> 
       <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script>
        $(function(){
		$('#frmguardar').validate();
             });
       </script>
      <style type="text/css">
         body{width: 978px; text-transform: capitalize; margin: 0 auto; font-size: 11pt; font-family: Traditional Arabic; background-color: #a0a0a0;}
        #baner {text-align: center;background-color: #fff;}
        #fondoblanco { background-color: white;}
        #frmguardar{padding-left: 280px;}
        #cletra{color: black; text-align: center; text-decoration: underline;}
        #fondocasi {text-align: right;}
        #distancia{padding-left: 320px;}
     </style>
    </head>
    <body>
          <div id="fondoblanco">
      <div id="wrapper">
        <ul id="level-one">
            <li><a href="muestra_inscrito.php" title="lista de reistros">REGISTRADOS</a></li>
            <li><a href="index.php" title="vuelve al inicio">INICIO</a></li>
        </ul>
</div>
<div id="fondoblanco"> 
<h4 id="cletra">INTRODUSCA DATOS DE FUNCIONARIO:</h4>
     <br>
         <form action="guardar_inscrito.php" name="frmguardar" id="frmguardar" method="post">
              <?php
                include('conexion.php');
                ?>
                 <table>   
                          <tr>
                              <td id="fondocasi">primer nombre:</td>
                              <td><input type="text" name="nombre1" size="35" value=""/></td> 
                          </tr> 
                          <tr>
                              <td id="fondocasi">segundo nombre:</td>
                              <td><input type="text" name="nombre2" size="35" value=""/></td> 
                          </tr> 
                          <tr>           
                              <td id="fondocasi">apellido paterno:</td>
                              <td><input type="text" name="paterno"  size="35" value=""/></td>
                          </tr>
                          <tr>
                              <td id="fondocasi">apellido materno:</td>
                              <td><input type="text" name="materno" size="35" value=""/></td>                           
                          </tr>
                         
                          <tr>
                              <td id="fondocasi">cedula identidad:</td>
                              <td><input type="text" name="ci"  size="35" value=""/></td>
                          <tr>
                    <td></td>
                    <td><br><input type='submit' class='btn btnsave' value='registrar'/></td>
                </tr>
        </table>
        <br><br>
        </form>     
</div>
</body>
</html>
