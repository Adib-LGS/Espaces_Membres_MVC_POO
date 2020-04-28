<?php
/**
 * Fait apl au function Class Model Login
 * Crée un NVL OBJ Login();
 * Pour pouvoir appeler function->hashPass();
 */
namespace Controllers;

class Login extends Controller{
    protected $modelName = \Models\Login::class;
    
    public function log(){
        $model = new \Models\Login();
        if(isset($_GET['action'])){
            if(!empty($_POST)){

                $errors2 = array();
                $pseudoConect = htmlspecialchars($_POST['userPseudoConect']);
                //  Récupération de l'utilisateur et de son pass hashé
                $resultat = $this->model->recupInfoUser($pseudoConect);
                // Comparaison du pass envoyé via le formulaire avec la base
                $isPasswordCorrect = password_verify($_POST['mdpConect'], $resultat['pass']);
                
            if(!$resultat){
                $errors2 = 'Mauvais identifiant ou mot de passe !';
            }elseif($isPasswordCorrect){
                session_start();
                $_SESSION['id'] = $resultat['id'];
                $_SESSION['userPseudoConect'] = $resultat['pseudo'];
                $errors2 = 'Vous êtes connecté !';
    
                \Http::redirect("index.php?action=profil&pseudo=".$_SESSION['userPseudoConect']);
            }else{
                $errors2 = 'Mauvais identifiant ou mot de passe !';
            }
            \Utils::debug($errors2);   
            }
        }
        require_once 'view/connexion.php'; 
    }
}