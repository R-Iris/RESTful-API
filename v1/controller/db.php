<?php

class DB {
    private static $writeDBConnection;
    private static $readDBConnection;

    public static function connectWriteDB(): PDO
    {
        if (self::$writeDBConnection === null) {

            // Create db connection
            self::$writeDBConnection = new PDO('mysql:host=localhost;dbname=tasksdb;charset=utf8', 'root', 'root');

            // Setting the error mode to be exceptions
            self::$writeDBConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Since MySQL handles prepared statements, no need to emulate them
            self::$writeDBConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }

        return self::$writeDBConnection;
    }

    // Since we have the same db for both writing and reading, the functions are similar
    public static function connectReadDB(): PDO
    {
        if (self::$readDBConnection === null) {
            self::$readDBConnection = new PDO("mysql:host=localhost;dbname=tasksdb;charset=utf8", "root", "root");
            self::$readDBConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$readDBConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }

        return self::$readDBConnection;
    }
}