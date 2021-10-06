<?php

/**
 * SITE CONFIG
 */
define(
    "SITE",
    [
        "name" => "Meu site em PHP",
        "desc" => "Projeto mvc base para outros projetos",
        "domain" => "denis-dev.com",
        "locale" => "pt_BR",
        "root" => "http://localhost:8080/"
    ]
);


/**
 * MINIFY CONFIG
 */

if ($_SERVER["SERVER_NAME"] === "localhost") {
    require_once __DIR__ . '/Minify.php';
}

/**
 * DATABASE CONFIG
 */

/**
 * TODO: refactor to get data from .env
 */
define("DATABASE_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "php_mvc_base",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);



/**
 * SOCIAL CONFIG
 */
define("SOCIAL_CONFIG", [
    "facebook_page" => "palmeiras",
    "facebook_author" => "palmeiras",
    "facebook_appId" => "",
    "twitter_creator" => "@palmeiras",
    "twitter_site" => "@palmeiras",
]);


/**
 * MAIL CONFIG
 */

define("MAIL", []);


/**
 * SOCIAL LOGIN -> GOOGLE
 */
define("SOCIAL_LOGIN_GOOGLE", []);


/**
 * SOCIAL LOGIN FACEBOOK
 */
define("SOCIAL_LOGIN_FACEBOOK", []);
