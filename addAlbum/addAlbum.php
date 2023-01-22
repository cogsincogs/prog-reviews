<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/classes/albumController.class.php';

$title = htmlspecialchars($_POST['title']);
$artist = htmlspecialchars($_POST['artist']);
$year = htmlspecialchars($_POST['year']);
$genre = htmlspecialchars($_POST['genre']);
$tracks = htmlspecialchars($_POST['tracks']);
$imageURL = htmlspecialchars($_POST['url']);
$rating = htmlspecialchars($_POST['rating']);

$dbh = new AlbumController();

if (!empty($_POST)) {
    $dbh->setAlbum($title, $artist, $year, $genre, $tracks, $imageURL, $rating);
}

?>