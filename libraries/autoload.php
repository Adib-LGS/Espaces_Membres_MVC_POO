<?php
/**Chargement automatique des Class
 * Evite de mettre trop de require_once;
 */
spl_autoload_register(function($className){
    $className = str_replace ("\\", "/", $className);
    require_once ("libraries/$className.php");
    //var_dump($className);
});