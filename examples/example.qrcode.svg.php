<?php

require_once("bootstrap.php");

use \Coco\QRCode\QRCode;

## Start timer
$mtime = explode(" ",microtime());
$starttime = $mtime[1] + $mtime[0];

$QRCode = new QRCode(['level' => "Q", 'size' => 10, 'margin' => 4]);
$QRCode->encode('https://github.com/zhangchunsheng/PHP-QRCode/  TEST  TEST')->toFile("temp/example.QRcode.svg");

## Stop timer
$mtime = explode(" ",microtime());
echo "Test took ".(($mtime[1] + $mtime[0]) - $starttime)." seconds";
