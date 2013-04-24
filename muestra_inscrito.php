<!DOCTYPE html>
<html>
    <head>
        <title>SISTEMA DE INSCRIPCIONES</title> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/barramenu.css"/>
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript">
            $(function(){			
                    $('table#distancia tbody tr:odd').addClass('amarillo');
					$('a.eliminar').click(function(){
						if(confirm('Esta usted seguro de eliminar al usuario?',''))
							return true;
						else
						return false;
					});
					
		});
            </script>
       <style type="text/css">
         body{ width: 978px; text-transform: capitalize; margin: 0 auto; font-size: 11pt; font-family: Traditional Arabic; background-color: #a0a0a0;}
        #baner {text-align: center; background-color: #fff;}
        #fondoblanco { background-color: white;}
        #fondo {background-color: #f3efef;}
        #distancia {padding-left: 200px; padding-right: 150px;}
        #distancia2 {padding-left: 1px;;}
        
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
        
        .linea0 {background-color: #f8f6c3;}
         #ver a { text-decoration:none;color: #6a6c6a;font-size: 12pt;font-family: Traditional Arabic; }
         #ver a:hover{color: #960014;}
         
        .barramenu {width: 510px; margin: 0 auto;}
        .barramenu li { display:inline; list-style:none; float: right; }
        .barramenu li a { text-decoration:none; color: #6a6c6a;font-size: 9pt;font-family: Traditional Arabic;}
        .barramenu li img { height:30px; vertical-align: middle; margin: 5px;}
        .barramenu a:hover { color:green;}
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
      <div id="wrapper">
        <ul id="level-one">
            <li><a href="nuevo_inscrito.php" title="nuevo inscripcion">AGREGAR</a></li>
            <li><a href="muestra_inscrito.php" title="lista de inscritos">VER INSCRITO</a></li>
        </ul>
</div>
<div id="fondoblanco"> 
    <br>
     <h4 id="cletra">LISTA DE INSCRITOS</h4>
      <br>
     <table id="distancia">
         <thead>
             <tr>
                 <th>#</th>
                 <th>PATERNO</th>
                 <th>MATERNO</th>
                 <th>NOMBRE</th>
                 <th>CEDULA IDENTIDAD</th>
                 <th colspan="3">ACCION</th>
             </tr>
         </thead>
         <tbody class="cambio">
            <?php                 
            include('conexion.php');
            $sql="SELECT * FROM tbl_registro WHERE id ";
            $result= mysql_query($sql);
            $i=1;
            while($row= mysql_fetch_array($result))
            {
            ?> 
                <tr>    
                    <td class="centro"><?php echo $i?></td>
                    <td class="centro"><?php echo utf8_encode($row['paterno'])?></td>
                    <td class="centro"><?php echo utf8_encode($row['materno'])?></td>
                    <td class="centro"><?php echo utf8_encode($row['nombres'])?></td>
                    <td class="centro"><?php echo utf8_encode($row['cedula_identidad'])?></td>
                    <td class="botonsolo"><a href="elimina_inscrito.php?id=<?php echo $row['id']?>" class="eliminar"><img src="iconos/eliminar.png" >ELIMINAR</a></td>
                    <td class="botonsolo"><a href="modifica_inscrito.php?id=<?php echo $row['id']?>"><img src="iconos/modificar.png">MODIFICAR</a></td>
                    
                </tr>
            <?php
            $i++;
            }
            ?>
     </tbody>
  </table>
  <br><br><br>
</div>
</body>
</html>
