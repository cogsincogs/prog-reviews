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
            throw new DatabaseConnectionException($Exception->getMessage());
        }
        
        return $pdo;
    }

    public function getAlbums() {
        $sql = "SELECT * FROM tbl_albums";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function setMessage($name, $email, $message){
        $sql = "INSERT INTO tbl_contact (fldName, fldEmail, fldMessage) VALUES (?, ?, ?);";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name, $email, $message]);
    }
}