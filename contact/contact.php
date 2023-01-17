<?php 
include '../classes/dbh.class.php';

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

$dbh = new Dbh();

if (!empty($_POST)) {
    $dbh->setMessage($name, $email, $message);
}

$albums = $dbh->getAlbums();
echo json_encode($albums);

?>