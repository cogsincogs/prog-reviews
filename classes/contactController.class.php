<?php

include $_SERVER['DOCUMENT_ROOT'] . '/classes/dbh.class.php';

class ContactController extends Dbh {
    public function setMessage($name, $email, $message){
        $sql = "INSERT INTO contactmessages (Name, Email, Message) VALUES (:name, :email, :message);";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([
            'name' => $name, 
            'email' => $email, 
            'message' => $message
        ]);
    }
}