<!DOCTYPE html>
<html>
    <head>
        <title>SISTEMA DE ARCHIVOS U.A.T.</title> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <style type="text/css">
         body{width: 978px; text-transform: capitalize; margin: 0 auto; font-size: 11pt; font-family: Traditional Arabic; background-color: #a0a0a0;}
        #baner {text-align: center;background-color: #fff;}
        #fondoblanco { background-color: white;}
        #fondo{background-color: #f3efef;}
        #distancia {padding-left: 400px;}
        #distancia2 {padding-left: 330px;}
        #distancia3 {padding-left: 400px;}
        #distancia4 {padding-left: 10px;}
         
        #cletra{color: #000; text-align: center; text-decoration: underline;}
        #fondocasi { text-align: right;}
        #fondocasi1 { background-color: #f3f1f1; text-transform: uppercase; text-align: left; color:green; }
        #cambio {text-transform: uppercase;}
        .linea0 {background-color: #f8f6c3;}
         #ver a { text-decoration:none;color: #6a6c6a;font-size: 12pt;font-family: Traditional Arabic; }
         #ver a:hover{color: #960014;}
        .barramenu li { display:inline; list-style:none;}
        .barramenu  a { text-decoration:none; color: #6a6c6a;font-size: 9pt; font-family: Traditional Arabic;}
        .barramenu  img { height:30px; vertical-align: middle; margin: 5px;}
        .barramenu a:hover { color:#960014;}
        
        
        .barramenu3 li { display:inline; list-style:none;}
        .barramenu3  a { text-decoration:none; color: #6a6c6a;font-size: 9pt; font-family: Traditional Arabic;}
        .barramenu3  img { height:50px; vertical-align: middle; margin: 5px;}
        .barramenu3 a:hover { color:#960014;}
        
        
     </style>
     <link rel="stylesheet" type="text/css" href="css/botones.css"/>
        <link rel="stylesheet" type="text/css" href="css/barramenu.css"/>
        <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    </head>
    <body>
     
           <div id="fondoblanco">
                  <div id="wrapper">
        <ul id="level-one">
            <li><a href="nuevo_inscrito.php" title="nuevo inscripcion">REGISTRAR</a></li>
            <li><a href="index.php" title="vuelve al inicio">INICIO</a></li>
        </ul>
        </div>
         <div>
            <table>
                   <tr>
                      <td> 
                          <ul class="barramenu">		  
                              <li><a style="font-weight: bold; " href="#" onclick="javascript:history.back(); return false;"><img src="iconos/atras.png">REGREZAR</a></li>
                          </ul>
                      </td>    
                   </tr>
            </table>
         </div>
         <div>
                          <?php
                          
                $ci=$_GET['ci'];
                include('conexion.php');
                $sql="SELECT * FROM tbl_funcionario WHERE ";
                  if ($si==false){
                   $sql.=" ci LIKE '%$ci%'";
                  $si=true;
                }
               else {
                     $sql.=" and ci LIKE '%$ci%'";
               }
                $result= mysql_query($sql);
                $row= mysql_fetch_array($result);
                ?>
                <table id="distancia">
                <tr colspan="4">
                    <td><?php echo $row['nombre1']?></td>
                    <td><?php echo $row['nombre2']?></td>
                        <td><?php echo $row['paterno']?></td>
                    <td><?php echo $row['materno']?></td>
                </tr>
                </table>         
         </div>
     <h4 id="cletra">INGRESAR DATOS PARA COMISION</h4>
        <div id="fondoblanco">
            <form name="frmbuscar" action="lista_hojaruta.php" method="GET" id="distancia2">  
                <table>
                 <tr>
                     <td id="fondocasi">motivo:</td>
                     <td><input type="text" name="nombre1" size="45" value=""/></td> 
                 </tr>
                 <tr>
                     <td id="fondocasi">lugar:</td>
                     <td><input type="text" name="nombre1" size="45" value=""/></td> 
                 </tr>
                 </table>
                 <table id="distancia4">
                 <tr>
                     <td id="fondocasi">de horas:</td>
                     <td><input type="text" name="nombre1" size="05" value=""/></td>
                     <td id="fondocasi">a horas:</td>
                     <td><input type="text" name="nombre1" size="05" value=""/></td> 
                 </tr>
                </table>
                <table id="distancia4">
                <td>fecha:</td>
                    <td><select name="dia">
                        <option value="">dia..</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                     </select>
                    </td>
                    <td>
                        <select name="mes">
                        <option value="">mes..</option>
                        <option value="enero">enero</option>
                        <option value="febrero">febrero</option>
                        <option value="marzo">marzo</option>
                        <option value="abril">abril</option>
                        <option value="mayo">mayo</option>
                        <option value="junio">junio</option>
                        <option value="julio">julio</option>
                        <option value="agosto">agosto</option>
                        <option value="sptiembre">septiembre</option>
                        <option value="octubre">octubre</option>
                        <option value="noviembre">noviembre</option>
                        <option value="diciembre">diciembre</option>
                        </select>
                    </td>
                    <td>
                    <select name="an">
                        <option value="">año..</option>
                        <option value="2000">2013</option>
                        <option value="2001">2014</option>
                        <option value="2002">2015</option>
                        <option value="2004">2016</option>
                        <option value="2004">2017</option>
                        <option value="2005">2018</option>
                        <option value="2006">2019</option>
                        <option value="2007">2020</option>
                     </select>
                    </td>
         </table>  
              </form>
        </div>
     <div>
         <br>
             <table id="distancia3">
                   <tr>
                      <td> 
                          <ul class="barramenu3">		  
                              <li><a href="imprime.php?id=<?php echo $_GET['id']?>" target="_blank" title="imprime boleta de comision"><img src="iconos/imprimir.png">IMPRIMIR</a></li> 
                          </ul>
                      </td>    
                   </tr>
            </table>
          <br>
     </div>
     </div><br>
   </body>
</html>