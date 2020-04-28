<?php
/**
 * Methode Static
 * redirect() replace the redirection for Exemple: header('Location:....php)
 * Cette Methode n'appartient pas un Objet mais a la Class Elle meme
 */
class Http {
    public static function redirect(string $url): void
    {
        header("Location: $url");
        exit();  
    }

}