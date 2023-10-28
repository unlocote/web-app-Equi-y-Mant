<?php
require_once('class/BCGFontFile.php');
require_once('class/BCGColor.php');
require_once('class/BCGDrawing.php');

require_once('class/BCGcode128.barcode.php');
require_once('class/BCGgs1128.barcode.php');
//header('Content-Type: image/png');
//$fontsize = 1;

$colorFront = new BCGColor(0, 0, 0);//0,0,0
$colorBack = new BCGColor(255, 255, 255);//255, 255, 255
//$salto = new BCGcode128();

//$font = new BCGFontFile(APPPATH . '../font/Arial.ttf', $fontsize);

$code = new BCGgs1128();

$code->setScale(2);
$code->setThickness(50);

$code->setForegroundColor($colorFront);
$code->setBackgroundColor($colorBack);
//$filepath = (isset($_GET["filepath"])?$_GET["filepath"]:"");
$v1 = $_GET['variable'];
$code->parse($v1);
//$salto->key('A');
//$code->parse('(415)7709998726789(8020)0000081324(3900)0000131225(96)20200430');

$drawing = new BCGDrawing("../barrasReem/$v1", $colorBack);
//$drawing = new BCGDrawing("../../pdf/$v1", $colorBack);
//../../pdf/$v1.
//$drawing = new BCGDrawing("../../pdf/$v1", $colorBack);

//$drawing = new BCGDrawing('', $colorBack);
$drawing->setBarcode($code);
//$drawing2->setBarcode($code);	

$drawing->draw();
//$drawing2->draw();
$drawing->finish(BCGDrawing::IMG_FORMAT_JPEG);
//$drawing->finish(BCGDrawing::IMG_FORMAT_PNG); funciona hay que cambiar la extencion de la imagen importada a PNG 114,250,92,0,'PNG');

//$drawing2->finish(BCGDrawing::IMG_FORMAT_JPEG);



?>