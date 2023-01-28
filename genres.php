<?php

include $_SERVER['DOCUMENT_ROOT'] . '/classes/albumController.class.php';

$genres = getGenres();

function getGenres() {
    $ac = new AlbumController();
    $count = array_values($ac->getCount())[0];
    $result = [];
    for ($i = 1; $i <= $count; $i++) {
        $g = array_values($ac->getProperty($i, 'Genre'))[0];
        if (!in_array($g, $result)) {
            array_push($result, $g);
        }
    }
    sort($result);
    return $result;
}