<?php
/**
 * Hérite de abstract Model et de son construct($pdo);
 */
namespace Models;

class Login extends Model 
{

    /**If Password is already used */
    public function recupInfoUser($pseudoConect):array
    {
    $req = $this->pdo->prepare('SELECT id, pseudo, pass FROM membres WHERE pseudo = ?');
    $req->execute(array($pseudoConect));
    $resultat = $req->fetch();
    return $resultat;
    }
}