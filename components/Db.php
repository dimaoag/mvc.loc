<?php

class Db{

    public static function getConnection(){
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);

        $dsn = "mysql:dbname={$params['dbname']};host={$params['host']}";
        $db = new PDO($dsn, $params['user'], $params['password'],[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        return $db;
    }
}