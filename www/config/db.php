<?php 

class Database {
    public static function connect() {
        $db = new mysqli('mysql', 'tienda-mvc', 'asdf1234#', 'tienda-mvc');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}