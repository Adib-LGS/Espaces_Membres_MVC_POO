<?php require_once 'template.php' ?>

<style> form{text-align:center;}</style>

<h1><?= $title = 'Connectez vous ici :' ?></h1>
    <?php if(!empty($errors)): ?>
        <div>
            <p>Try Again</p>
            <ul>
                <?php foreach($errors as $error): ?>
                    <li><?= $error; ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif ?>

<form action="index.php?action=connexion" method="POST">
    <label for="pseudo">Pseudo</label> : <input type="text" name="userPseudoConect"/><br />
    <label for="password">Mot de passe</label> :  <input type="password" name="mdpConect"  /><br />
    <input type="submit" value="Send" />
</form>

<?php require_once 'libraries/autoload.php' ?>