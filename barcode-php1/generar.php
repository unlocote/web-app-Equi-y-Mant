<?php
require_once('class/BCGFontFile.php');
require_once('class/BCGColor.php');
require_once('class/BCGDrawing.php');
require_once('class/BCGLabel.php');

require_once('class/BCGcode128.barcode.php');
require_once('class/BCGgs1128.barcode.php');
//header('Content-Type: image/png');
//$fontsize = 1;
$size = 2;
$colorFront = new BCGColor(0, 0, 0);//0,0,0
$colorBack = new BCGColor(255, 255, 255);//255, 255, 255
//$font = new BCGFontFile(APPPATH . '../font/Arial.ttf', $fontsize);
//$font = new BCGFontFile('', 2);



$code = new BCGgs1128();
$code->setScale(2);
//$code->setText('hola');


//$code->size(3);
$code->setThickness(50);
$code->setForegroundColor($colorFront);
$code->setBackgroundColor($colorBack);
//$code->drawText();
//$code->clearLabels();
//$code->sizeof($font);

//$filepath = (isset($_GET["filepath"])?$_GET["filepath"]:"");
$v1 = $_GET['variable'];
//$size = new BCGFontFile($v1,3)
$code->parse($v1);
//$code->clearLabels();
//$code->drawText($v1);
//$code->parse("");
//$code->parse('0000131225(96)20200430');

//$drawing = new BCGDrawing("../barras/$v1", $colorBack);
$drawing = new BCGDrawing("../../pdf/$v1", $colorBack);
//$drawing->drawText(0);
//$drawing = new BCGDrawing('', $colorBack);
//$drawing->setText('hola');
$drawing->setBarcode($code);
//$drawing->removeLabel(2,$code);
//$drawing2->setBarcode($code);

$drawing->draw();
//$drawing2->draw();
$drawing->finish(BCGDrawing::IMG_FORMAT_JPEG);
//$drawing2->finish(BCGDrawing::IMG_FORMAT_JPEG);



?>