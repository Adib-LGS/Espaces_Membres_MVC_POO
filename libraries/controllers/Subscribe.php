<?php
/**
 * Fait apl au function Class Model Subscribe
 * Crée un NVL OBJ Subsribe();
 * Pour pouvoir appeler function->checkPseudo()...;
 */
namespace Controllers;

class Subscribe extends Controller {
    protected $modelName =  \Models\Subscribe::class;

    public function subs(){
        $model = new \Models\Subscribe();

        if(isset($_GET['action'])){
            if(!empty($_POST)){
                
                $errors = array();
                if(empty($_POST['userPseudo']) || !preg_match('/^[a-zA-Z0-9_]+$/', htmlspecialchars($_POST['userPseudo']))){
                    $errors['userPseudo'] = "Votre pseudo n'est pas valide";
                }else {//If User name is already used
                    $user = $this->model->checkPseudo();
                    if($user){
                        $errors['userPseudo'] = 'Ce pseudo est deja pris';
                    }
                }
            
                if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    $errors['email'] = "Entrez un e-mail valide";
                }else {//If Email is already used
                    $user = $this->model->checkEmail();
                    if($user){
                        $errors['email'] = 'Cet mail est déja utilisé pour un autre compte';
                    }
                }

                if(empty($_POST['mdp1']) || $_POST['mdp1'] != $_POST['mdp2']){
                    $errors['mdp1'] = "Vous devez entrer un mot de passe cool";
                }
        
                if(empty($errors)){ // Insertion User + Encrypt Password in Data-Base
                    $user = $this->model->insertUser();
                    \Http::redirect('index.php?action=connexion');//Redirection vers connexion.php
                }
                //\Utils::debug($errors);
            }
            require_once 'view/inscription.php';
    }
}
}