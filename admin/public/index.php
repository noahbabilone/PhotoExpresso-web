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

switch ($page) {
    case 'dashboard':
        $controller->index();
        break;
    case 'logout':
        $controller->logout();
        break;
    case 'commandes':
        $controller->commandes();
        break;
    case 'commandes.en_cours_d_impression':
        $controller->etatCommande(1);
        break;
    case 'commandes.imprimees':
        $controller->etatCommande(2);
        break;
    case 'commandes.expediees':
        $controller->etatCommande(3);
        break;
    case 'commandes.annulees':
        $controller->etatCommande(4);
        break;
    case 'commande':
        $controller->getCommande($_GET['id']);
        break;
    case 'produits':
        $controller->produits();
        break;
    case 'produit.ajout':
        $controller->ajoutProduit();
        break;
    case 'users':
        $controller->users();
        break;
    case 'users.clients':
        $controller->clients();
        break;
    default :
        $controller->notFound();
        break;

}


/*if ($page === 'dashboard') {
    $controller->index();
} else if ($page === 'logout') {
    $controller->logout();
} else if ($page === 'commandes') {
    $controller->commandes();
} else if ($page === 'commandes.en_cours_d_impression') {
    $controller->etatCommande(1);
} else if ($page === 'commandes.imprimees') {
    $controller->etatCommande(2);
} else if ($page === 'commandes.expediees') {
    $controller->etatCommande(3);
} else if ($page === 'commandes.annulees') {
    $controller->etatCommande(4);
} else if ($page === 'commande') {
    $id = $_GET['id'];
    $controller->getCommande($id);
} else if ($page === 'produits') {
    $controller->produits();
} else if ($page === 'produit.ajout') {
    $controller->ajoutProduit();
} else if ($page === 'users') {
    $controller->users();
} else if ($page === 'users.clients') {
    $controller->clients();
} else {
    $controller->notFound();
}*/



