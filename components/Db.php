<?php

class Db
{
    public static function getConnection()
    {
       $params = include $_SERVER['DOCUMENT_ROOT'] . '/components/db_params.php'; 
       
       $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
       $db->exec("set names UTF8");

       return $db; 
    }
}