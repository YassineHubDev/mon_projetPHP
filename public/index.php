<?php
session_start();
require dirname(__DIR__) . '/autoload.php';

//Appel du routeur
use src\Utilities\Router;

$router = new Router();
$router->addRoute('/', 'home.php');
$router->addRoute('/inscription', 'register.php');
$router->addRoute('/votre-espace', 'contact.php');
$router->addRoute('/mon-espace-prive', 'client.php');
$router->addRoute('/espace-magasin', 'magasin.php');


//On souhaite récuperer le fichier à executer
$template = $router->match();

if (is_null($template)) {
    throw new \Exception('Page introuvable');
} else {
    require dirname(__DIR__) . "/templates/" . $template;
}
