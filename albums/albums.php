<?php
include '../classes/dbh.class.php';

$dbh = new Dbh();
$albums = $dbh->getAlbums();
echo json_encode($albums);