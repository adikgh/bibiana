<?php

class db {
    public static $host = 'localhost';
    public static $user = 'root';
    public static $pass = '';
    public static $name = 'sana_bosaga';
    public static $connect = null;

    // public static $host = 'srv-pleskdb28.ps.kz:3306';
    // public static $user = 'romed_sanatori';
    // public static $pass = 'qwerty123';
    // public static $name = 'romederk_bosaga';
    // public static $connect = null;

    public function __construct()
    {
        self::$connect = mysqli_connect(self::$host, self::$user, self::$pass, self::$name);
        if(!self::$connect) exit("Настройте конфигурацию базы данных!");
    }

    public static function query($sql)
    {
        return mysqli_query(self::$connect, $sql);
    }
}