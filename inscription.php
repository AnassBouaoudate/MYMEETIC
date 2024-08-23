<?php


require_once 'Utilisateur.php';
require_once 'Database.php';

function calculerAge ($dateNaissance) { 
    $dateActuelle = new DateTime (); 
    $dateNaissance = new DateTime ($dateNaissance); 
    $difference = $dateActuelle->diff ($dateNaissance); 
    return $difference->y; // retourne âge en années 
}

if (isset($_POST['nom'], $_POST['prenom'], $_POST['dateNaissance'], $_POST['ville'], $_POST['email'], $_POST['motDePasse'], $_POST['loisir'], $_POST['genre'])) {


    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $dateNaissance = $_POST['dateNaissance'];
    $ville = $_POST['ville'];
    $email = $_POST['email'];
    $motDePasse = hash('sha256',$_POST['motDePasse']);
    $loisir = $_POST['loisir'];
    $genre = $_POST['genre'];

    if (calculerAge ($dateNaissance) >= 18) { 
        $utilisateur = new Utilisateur ($nom, $prenom, $dateNaissance, $ville, $email, $motDePasse, $loisir, $genre); 
        $database = new Database (); 
        $database->insertUtilisateur ($utilisateur); } 
        else { //echo "Désolé, seuls les utilisateurs de plus de 18 ans peuvent s'inscrire."; 
        } 
    }
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <title>Inscription - Meetic</title>
</head>
<body>
    <div class="container">
        <form id="inscriptionForm" action="" method="post">
            <h2>Inscription</h2>
            
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="dateNaissance">Date de naissance :</label>
            <input type="date" id="dateNaissance" name="dateNaissance" required>

            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required>

            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="motDePasse">Mot de passe :</label>
            <input type="password" id="motDePasse" name="motDePasse" required>

            <label for="loisir">Loisir :</label>
            <input type="text" id="loisir" name="loisir" required>

            <label for="genre">Genre :</label>
            <select id="genre" name="genre" required>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
                <option value="autre">Autre</option>
            </select><br><br>

            <button type="submit">S'inscrire</button>
        </form>
    </div>
</body>
</html>



 