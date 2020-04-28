<?php
/**
 * Methode Static, 
 * N'appartient pas a l'Objet mais a la Class Elle meme
 */

class Database  {
    /** Data-Base Connexion
    * @return PDO 
    * */ 
    public static function dbConnect():PDO
    {
        $pdo = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8', 'root', 'root',[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        return $pdo;
    }
}
