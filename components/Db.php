<?php
/**
 * Created by PhpStorm.
 * User: Полина
 * Date: 26.06.2018
 * Time: 3:42
 */

class Db{

    public static function getConnection(){
        $paramPath = ROOT .  '/db_param.php';

        $params = include_once ($paramPath);
        //var_dump($params);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        return $db;

    }

}