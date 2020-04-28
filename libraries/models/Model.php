<?php 
/**
 * Ceci est l'idée General du Models
 * Empeche l'instanciation de Model
 * Doit etre presente dans les Class Models
 * Va chercher une Méthode Static déja defini "dbConnect();"
 * ds Class  Database
 */

namespace Models;

abstract class Model
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = \Database::dbConnect(); //Apl de la Methode Static
        
    }
}




