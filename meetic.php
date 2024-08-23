<?php

require_once 'Utilisateur.php';
require_once 'Database.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="meetic.css">
    <title>Page de Connexion</title>
</head>
<body>

    <img src="./image/meetic.png">
    
    <form action="login.php" method="post">
        <label for="adresse">Adresse mail:</label>
        <input type="email" id="username" name="email" autocomplete="off"required>
        
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="mdp" autocomplete="off" required>
        
        <button type="submit" name="connecte">Se connecter</button>
    </form>

    <p>Vous n'avez pas de compte ? <a href="inscription.php">Inscrivez-vous ici</a>.</p>

</body>
</html>



