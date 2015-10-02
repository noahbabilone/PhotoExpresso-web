<?php
define('ROOT', $_SERVER['DOCUMENT_ROOT'] . "/admin");
require ROOT . '/public/App.php';
App::load();
$app = App::getInstance();
use AppModel\DBAuth;

if (isset($_POST['username']) && isset($_POST['password'])) {
    
    $username = htmlspecialchars($_POST['username']);
    $password = sha1(htmlspecialchars($_POST['password']));

    $auth = new DBAuth($app->getDb());
    $isConnected = $auth->login($username, $password);
    if ($isConnected)
        echo json_encode(array("isConnected"=>$isConnected, "msg"=>"Vous êtes connecté !!"));
    else 
        echo json_encode(array("isConnected"=>$isConnected, "msg"=>"Pas connecté !!"));

} else {
    echo json_encode(array("isConnected"=>false, "msg"=>"Pas connecté !!"));

}