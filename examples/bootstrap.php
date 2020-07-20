<?php

if (PHP_MAJOR_VERSION < 7) {
	die("PHP QRCode only works for PHP 7+");
}

if (php_sapi_name() != "cli") {
	chdir("../");
}

define("ROOT", dirname(__DIR__));

function autoload($clazz) {
    $file = str_replace('\\', '/', $clazz);
    if(is_file(ROOT . "/src/$file.php")) {
        require ROOT . "/src/$file.php";
    }
}

spl_autoload_register("autoload");
