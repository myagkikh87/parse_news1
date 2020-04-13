<?php

define("SERVER", "localhost");
define("DB", "apmarev_ruslan");
define("PASSWORD", "A1qwerty");
define("USER", "apmarev_ruslan");

function db_connect()
{
    $db = new mysqli(SERVER, USER, PASSWORD, DB);
    $db->set_charset("utf8");
    if (!$db) {
        return false;
    }
    return $db;
}