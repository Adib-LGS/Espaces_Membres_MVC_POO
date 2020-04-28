<?php
session_start(); 
require_once 'template.php';
?>

<p>
<?php 
if (isset($_SESSION['id']) && isset($_SESSION['userPseudoConect'])):?> 
<?= 'Bonjour ' . $_SESSION['userPseudoConect'] ?>
<?php endif ?>
</p>

<h1><?= $title = 'Voici votre profil' ?></h1>


<h2><?= $title = 'Deconnectez vous ici :' ?></h2>

<p><button><a href="index.php?action=accueil">Se deconecter</a></button></p>

<?php 
require_once 'libraries/autoload.php'; 
?>