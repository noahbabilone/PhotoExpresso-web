<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . "admin");
require ROOT . '/public/App.php';

use AppModel\DBAuth;
App::load();

$app = App::getInstance();

 //Vérification Session utilisateur
$auth = new DBAuth($app->getDb());
if (!$auth->logged()) {
    $auth->forbidden();
}                                               

$controller = new \AppController\UsersController();

 //On recupère la page
if (isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'dashboard';
}


if ($page === 'dashboard') {
    $controller->index();
}else {
     $controller->notFound();
}
