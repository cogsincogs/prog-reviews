<?php

require './vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader("./templates");
$twig = new Environment($loader);

$title = "Prog Reviews";

echo $twig->render('index.html.twig', ['title' => $title]);