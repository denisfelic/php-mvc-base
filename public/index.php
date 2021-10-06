<?php


ob_start();
session_start();

require_once  __DIR__ . "/../vendor/autoload.php";

echo "<h1>Hello World! <br> Olá Mundo!</h1>";

ob_end_flush();
