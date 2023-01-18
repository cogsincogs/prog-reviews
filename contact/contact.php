<?php 
include '../classes/contactController.class.php';

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

$dbh = new ContactController();

if (!empty($_POST)) {
    $dbh->setMessage($name, $email, $message);
}

?>