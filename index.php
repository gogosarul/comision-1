<!DOCTYPE html>
<html>
    <head>
        <title>SISTEMA DE INSCRIPCIONES</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/botones.css"/>
        <link rel="stylesheet" type="text/css" href="css/barramenu.css"/>
      <style type="text/css">
         body{width: 980px; text-transform: capitalize; margin: 0 auto; font-size: 11pt; font-family: Traditional Arabic; background-color: #a0a0a0; }
        #baner {text-align: center;background-color: #fff;}
        #fondoblanco { background-color: white;}
        #distancia{padding-left: 320px;}
        #fondocasi {text-align: right;}
     </style>
    </head>
  <body>
  <div id="fondoblanco">
                  <div id="wrapper">
        <ul id="level-one">
            <li><a href="nuevo_inscrito.php" title="nuevo inscripcion">REGISTRAR</a></li>
        </ul>
</div>
  <div id="distancia">  
        <table>
            <tr>
                <td>   
                    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="350" height="350" id="Banner gamlp" align="middle">
                        <param name="allowScriptAccess" value="sameDomain" />
                        <param name="allowFullScreen" value="false" />
                        <param name="movie" value="flash/cen.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="flash/cen.swf" quality="high" bgcolor="#ffffff" width="350" height="350" name="Banner gamlp" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
                    </object>     
                </td>
            </tr>
        </table>
      </div>
      <div>
            <form name="frmbuscar" action="destino.php" method="GET" id="distancia">  
       <table>
                          <tr>
                              <td id="fondocasi">cedula identidad:</td>
                              <td><input type="text" name="ci"   size="35"/></td>
                          </tr>
                    <td></td>
                    <td><br><input type="submit" class="btn btnadmin" value="ingresar"/></td>
                </tr>
       </table>
      </form>
        
    </div>
    <br><br>
  </div>
 </body>       
</html>