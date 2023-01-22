<?php

include $_SERVER['DOCUMENT_ROOT'] . '/genres.php';

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . "/templates");
$twig = new Environment($loader);

$title = "Contact me - Prog Reviews";
$genres = getGenres();
$scripts = [$_SERVER['DOCUMENT_ROOT'] . "/contact/contact.js"];

echo $twig->render('contact.html.twig', ['title' => $title, 'genres' => $genres, 'scripts' => $scripts]);