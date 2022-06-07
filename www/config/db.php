<?php 

class Database {
    public static function connect() {
        $db = new PDO('mysql:host=localhost;dbname=tienda-mvc', 'tienda-mvc', 'tienda-mvc');
        $db->query('SET NAMES utf8');
        return $db;
    }
}