<?php

require '../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader("../templates/");
$twig = new Environment($loader);

$title = "Contact me - Prog Reviews";
$scripts = ["/contact/contact.js"];

echo $twig->render('contact.html.twig', ['title' => $title, 'scripts' => $scripts]);