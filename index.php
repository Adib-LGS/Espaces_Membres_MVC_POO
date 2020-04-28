<?php
/**
 * Router Pages Dispatching,
 * Default Page = Accueil (Home Page)
 * Router require Controller 
 * Doit appeler le contenu la class  DefaultPage ds Controller Page.php*/

require_once ("libraries/autoload.php");
/**
 * Récupération de la Page par defaut
 */


if(isset($_GET['action'])){
    $action = $_GET['action'];
    switch($action){

        case 'inscription':{
            $controller = new \Controllers\Subscribe();
            $controller->subs();
        }   
        break;

        case 'connexion':{
            $controller = new \Controllers\Login();
            $controller->log();
        }
        break;

        case 'profil':{
            $controller = new \Controllers\DefaultPage();
            $controller->index();
        }
        break;

        case 'accueil':{
            $controller = new \Controllers\DefaultPage();
            $controller->index();
        }
        break;
    }   
}else {
    $controller = new \Controllers\DefaultPage();
    $controller->index();
}
 









