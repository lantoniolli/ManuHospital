<?php

    require_once(__DIR__. '/../config/config.php');

    class Database{

        private static object $_pdo;

        private function __construct() {

        }
        public static function getInstance(){
            
            self::$_pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            if(self::$_pdo === null){
                self::$_pdo = New PDO (DSN,USER,PWD);
                return self::$_pdo;
            }

            // Permet de param les fetch mod.
            var_dump(self::$_pdo);
            return self::$_pdo;
        }
    }