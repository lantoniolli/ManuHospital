<?php

    require_once(__DIR__. '/../config/config.php');

    class Database{

        private object $_pdo;

        /** Fonction qui permet d'instancier la connexion à la base de données.
         * @return [type]
         */
        public static function getInstance(){
            $pdo = New PDO (DSN,USER,PWD);
            return $pdo;
        }
    }