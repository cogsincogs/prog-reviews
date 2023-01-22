<?php
include $_SERVER['DOCUMENT_ROOT'] . '/genres.php';

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . "/templates");
$twig = new Environment($loader);

$title = "Prog Reviews";
$genres = getGenres();

echo $twig->render('index.html.twig', ['title' => $title, 'genres' => $genres]);