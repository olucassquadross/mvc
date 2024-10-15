<?php
// config/database.php

class Database
{
    private static $conn;

    public static function connect()
    {
        if (!self::$conn) {
            self::$conn = new PDO('mysql:host=localhost;dbname=mvc', 'root', '');
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$conn;
    }
}
