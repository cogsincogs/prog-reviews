<?php

require '../vendor/autoload.php';

include '../classes/albumController.class.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader("../genres");
$twig = new Environment($loader);

$ac = new AlbumController();

$genres = getGenres($ac);
echo $twig->render('index.html.twig', ['genres' => $genres]);

function getGenres($ac) {
    $count = array_values($ac->getCount())[0];
    $result = [];
    for ($i = 1; $i <= $count; $i++) {
        $g = array_values($ac->getProperty($i, 'Genre'))[0];
        if (!in_array($g, $result)) {
            array_push($result, $g);
        }
    }
    return $result;
}