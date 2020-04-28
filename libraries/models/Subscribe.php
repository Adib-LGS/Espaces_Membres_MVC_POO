<?php
namespace Models;
/**
 * Hérite de abstract Model et de son construct($pdo);
 */

class Subscribe extends Model 
{
    
    /**Check if existing Pseudo */
    public function checkPseudo()
    {
        $req = $this->pdo->prepare('SELECT id FROM membres WHERE pseudo = ?');
        $req->execute([$_POST['userPseudo']]);
        $user = $req->fetch();
        return $user;
    }
        
    /**Check if existing Email */
    public function checkEmail()
    {
        $req = $this->pdo->prepare('SELECT id FROM membres WHERE email = ?');
        $req->execute([$_POST['email']]);
        $user = $req->fetch();
        return $user;
    }
        
    /**Insertion User + Encrypt Password in DB */
    public function insertUser():void
    {
        $req = $this->pdo->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription) VALUES(?, ?, ?, NOW())');
        $pass_hache = password_hash($_POST['mdp1'], PASSWORD_BCRYPT);
        $req->execute([$_POST['userPseudo'], $pass_hache, $_POST['email']]);
    }
}