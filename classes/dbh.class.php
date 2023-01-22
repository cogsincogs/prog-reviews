<?php

class Dbh {
    private $host = "localhost";
    private $user = "root";
    private $psw = "";
    private $dbname = "db_progreviews";

    protected function connect(){
        $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8";

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        try {
            $pdo = new PDO($dsn, $this->user, $this->psw, $options);
        } catch (PDOException $Exception) {
            echo "PDO Error: " . $Exception->getMessage();
        }
        
        return $pdo;
    }
}