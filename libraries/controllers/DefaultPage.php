<?php
/**
 * Hérite de abstract Controller et de ses propirétés et son construct();
 * Va chercher les Models\Class et les function qu'elle contienent
 */
namespace Controllers;

class DefaultPage extends Controller{

    protected $modelName = \Models\Subscribe::class;
    protected $modelName2 = \Models\Login::class;

    public function index()
    {

        if(!isset($_GET['action']) == 'accueil'){ 
            require_once 'view/accueil.php';
        }
        
        if(isset($_GET['action'])){
            $action = $_GET['action'];
        
            switch($action){
        
                case 'profil':{
                    require_once 'view/profil.php';
                }
                break;
        
                case 'accueil':{
                   require_once 'view/accueil.php';
                }
                break;
            }   
        }
    }
}
