<?php 

date_default_timezone_set('America/Mexico_City');
$hora = date("G:a");
$min= date("i:a");
$seg=date("s:a");

require_once('../vendor/autoload.php');
header('../sesion.php');

$mpdf = new \Mpdf\Mpdf([

]);

function getNombre(){
    $nombre= "Roberto Ruiz";
    return $nombre;
}

function getPoints(){
  $points = "80%";
  return $points;
}

function getPlantilla(){  

    $plantilla = '<body>
  
      <div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
        <div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
          <span style="font-size:50px; font-weight:bold">Certificacion</span>
          <br><br>
          <span style="font-size:25px"><i>Esto certifica que:</i></span>
          <br><br>
          <span style="font-size:30px"><b><label> '.getNombre().' </label></b></span><br/><br/>
          <span style="font-size:25px"><i>a completado exitosamenta la certificacion de</i></span> <br/><br/>
          <span style="font-size:30px">Desarrollador Backend</span> <br/><br/>
          <span style="font-size:20px">con un puntaje de <b><label> '.getPoints().' </label></b></span> <br/><br/><br/><br/>
          <span style="font-size:25px"><i>el dia: <label> '.date("d/m/Y").' </label></i></span>
          <span style="font-size:25px"><i>a las: <label> '.date("G:i a").' </label></i></span><br>
        </div>
      </div>
    </body>';
  
    return $plantilla;
}

$plantilla = getPlantilla();

$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output();

?>