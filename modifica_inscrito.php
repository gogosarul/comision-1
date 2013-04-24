<!DOCTYPE html>
<html>
    <head>
        <title>SISTEMA DE INSCRIPCIONES</title> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/botones.css"/>
        <link rel="stylesheet" type="text/css" href="css/barramenu.css"/>
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
       <style type="text/css">
         body{ width: 978px; text-transform: capitalize; margin: 0 auto; font-size: 11pt; font-family: Traditional Arabic; background-color: #a0a0a0;}
        #baner {text-align: center; background-color: #fff;}
        #fondoblanco { background-color: white;}
        #fondo {background-color: #f3efef;}
       #distancia{padding-left: 330px;}
        #cletra{color: black; text-align: center; text-decoration: underline;}
        .cambio {text-transform: uppercase; font-size: 9pt;}

        table#distancia tbody tr:hover{background:#EFB354; color:#fff;}
	table#distancia thead tr th{background:#043569; color:#fff;} 
	.amarillo{background: #FFF4D5;}
	.gris{color:#B9B7AD;}
                
        .botonsolo a { text-decoration:none; color: #6a6c6a;font-size: 9pt;font-family: Traditional Arabic;}
        .botonsolo img { height:21px; vertical-align: middle; margin: 3px;}
        .botonsolo a:hover { color:#960014;}
        .centro{text-align:center;}
        .tama {padding:6px 6px 6px 5px;}
        
        .linea0 {background-color: #f8f6c3;}
         #ver a { text-decoration:none;color: #6a6c6a;font-size: 12pt;font-family: Traditional Arabic; }
         #ver a:hover{color: #960014;}
     </style>
    </head>
    <body>
    <div>
        <table id="baner">
            <tr>
                <td>            
                    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="972" height="975" id="Banner gamlp" align="middle">
                        <param name="allowScriptAccess" value="sameDomain" />
                        <param name="allowFullScreen" value="false" />
                        <param name="movie" value="flash/baner.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="flash/baner.swf" quality="high" bgcolor="#CAD1E2" width="972" height="180" name="Banner gamlp" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
                    </object>  
                </td>           
            </tr>
        </table>
    </div>
<div id="fondoblanco"> 
    <br>
     <h4 id="cletra">ELIJA EL DATO A MODIFCAR</h4>
     <br>
  <form action="editar_inscrito.php" name="frmeditar" method="post" id="distancia">    
    <table>
    <?php
    $id=$_GET['id'];
    include('conexion.php');                      
    $sql="SELECT * FROM tbl_registro WHERE id='$id'";
    $result= mysql_query($sql);
    while($row= mysql_fetch_array($result))
    {
     ?>
        <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
          <tr>
             <td><input type="text" name="paterno" size="35" class="tama" id="fechaprobacion" value="<?php echo utf8_encode ($row['paterno'])?>"/></td>
             <td>modificar apellido paterno</td>
         </tr>
         <tr> 
             <td><input type="text" name="materno" size="35" class="tama" id="hojaruta" value="<?php echo utf8_encode($row['materno'])?>"/></td>
             <td>modificar apellido materno</td>
         </tr>
         <tr>
             <td><input type="text" name="nombre" size="35" class="tama" id="codcatastral" value="<?php echo utf8_encode($row['nombres'])?>"/></td>
             <td>modificar nombre:</td>
         </tr>
          <tr>
              <td><input type="text" name="ci" size="35" class="tama" id="propietario" value="<?php echo $row['cedula_identidad']?>"/></td>
              <td>modificar cedula identidad:</td>
          </tr>
           <tr>
                <td><br><input type='submit' class='btn btncopy' value='modificar datos'/></td>
            </tr>
       <?php
       }
       ?>
            
    </table>
   <br><br>
  </form>    
</div>
</body>
</html>
