<?php 

require_once('../vendor/autoload.php');
//Planitlla HTML
require_once('plantillas/reporte/certificate.php');
//Codigo CSS
$css = file_get_contents('plantillas/reporte/style.css');

//base de datos

$mpdf = new \Mpdf\Mpdf([

]);

$plantilla = getPlantilla();

$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output();