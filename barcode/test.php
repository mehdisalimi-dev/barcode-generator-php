<?php
require_once('class/BCGFontFile.php');
require_once('class/BCGColor.php');
require_once('class/BCGDrawing.php');

require_once('class/BCGcode128.barcode.php');

header('Content-Type: image/png');

$color_white = new BCGColor(255, 255, 255);

$code = new BCGcode128();
$code->parse('3453535525234523453453');

$drawing = new BCGDrawing('', $color_white);
$drawing->setBarcode($code);

$drawing->draw();
$drawing->finish(BCGDrawing::IMG_FORMAT_PNG);

$drawing = new BCGDrawing('', $color_white);
$drawing = new BCGDrawing('image.png', $color_white);
?>