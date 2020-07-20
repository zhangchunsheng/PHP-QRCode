<?php

require_once("bootstrap.php");

use \Coco\QRCode\QRCode;

$QRCode = new QRCode(['level' => "L", 'size' => 6, 'margin' => 2]);
$text = $QRCode->encode('https://github.com/zhangchunsheng/php-qrcode')->toASCII();

echo "二维码\n";
echo $text;

//file_put_contents("ascii.qrcode.txt", $text);

echo "Now run 'type ascii.qrcode.txt' in the CMD";

/*

Recognition works even with inverted colors (while on black)
but you could change the CMD colors to match - color 0F or color 03

Resize the CMD window - mode con: cols=100 lines=40

For PowerShell you need to do this:
$output.replace("U", [char]0x2588)

 ▄▄▄▄▄▄▄ ▄▄  ▄ ▄▄▄▄▄▄▄
 █ ▄▄▄ █ ▄▀▄ █ █ ▄▄▄ █
 █ ███ █ █▄▄▀  █ ███ █
 █▄▄▄▄▄█ ▄ ▄ ▄ █▄▄▄▄▄█
 ▄▄▄▄  ▄ ▄▀█  ▄  ▄▄▄ ▄
 █ ▄▀██▄▀  █ █▄▄█▄▀▀▄█
 ▀▄█▀▄ ▄▀▀▄█▄▀█  ▄█ █
 ▄▄▄▄▄▄▄ ▀ █  █▄▀▄█▄▀
 █ ▄▄▄ █  █▄█▀▀█  ▀█▄▄
 █ ███ █ █▀▄▄ █  █▀▄▀
 █▄▄▄▄▄█ ██▀██ ▀▄▀▀  ▀

▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄
█ ▄▄▄▄▄ █▀▀ ██▀█ █▄ ▄▄█ ▄▄▄▄▄ █
█ █   █ █▄▀██▀█▀▀▄ ▀█▀█ █   █ █
█ █▄▄▄█ █ ▄ █ █▄  ▄▄▀██ █▄▄▄█ █
█▄▄▄▄▄▄▄█ █ ▀▄█▄█ ▀ ▀ █▄▄▄▄▄▄▄█
█▄▄▀▄▀█▄ ▀▀█  ▄▄▄ ▀█▄█▀ ▄▄▀▄▄▀█
███▀▀▀▄▄█ ▀▀  ▀▀▀▄▄▄ █  ▄    ██
█▄▀▀▀ █▄▀▄█▄ ██▀▄▄▀▀  ▀▄██▄▀▄▄█
█ ▄█ ▀▀▄█▀█▀ █▀▀██▀▀█  ▀  ▀▄ ▄█
███▄ ▀ ▄▄█▀██  █▄▀▄▀█▄▄▀ █▄█▄▀█
█▄█▄ ▄▄▄▄█▀▀▄ ▄█▀▀ ▄▀██   ▄█  █
█▄█▄█▄█▄█ █▄▀█▀▄▀ ██▀ ▄▄▄ █ ▀▀█
█ ▄▄▄▄▄ █▄▀███▀▀█▄▄▄█ █▄█ █▀▄▀█
█ █   █ █▀▀▀▀ ▀█▀█ ▀█ ▄    █▀██
█ █▄▄▄█ █▀▄██  ██      ██▄▄▄▀▄█
█▄▄▄▄▄▄▄█▄▄█▄▄▄▄▄███▄▄▄█▄▄▄█▄██

https://api.qrserver.com/v1/create-qr-code/?data=http%3A%2F%2Fweixin.qq.com%2Fx%2FIbWrjqNSAkikarnnQVFJ

*/
