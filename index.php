<?php

use App\Model\App;

define('ROOT', (__DIR__)); // définit le chemin racine du projet
require ROOT . '/App/Model/App.php'; // Apelle la classe App
App::load(); // Apelle la fonction load qui apelle l'autolader permettant d'appeller les classes de manière dynamique.

require ROOT . '/App/Views/Template/default.php'; // Appelle le template default.