<?php require 'template.php'?>

    <style> form{text-align:center;}</style>

    <h1><?= $title = 'Inscrivez vous ici :' ?></h1>
        <?php if(!empty($errors)): ?>
            <div>
                <p>Vous n'avez pas rempli le formulaire correctement</p>
                <ul>
                    <?php foreach($errors as $error): ?>
                        <li><?= $error; ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>
   
    <form action="index.php?action=inscription" method="POST">
        <label for="pseudo">Pseudo</label> : <input type="text" name="userPseudo"/><br />
        <label for="password">Mot de passe</label> :  <input type="password" name="mdp1"  /><br />
        <label for="password">Retapez votre Mot de passe</label> :  <input type="password" name="mdp2"  /><br />
        <label for="email">Adresse email</label> : <input type="email" name="email"   /><br />
        <input type="submit" value="Send" />
    </form>
<?php require_once 'libraries/autoload.php' ?>
 </body>
 </html>