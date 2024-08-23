<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'Utilisateur.php';

class Database {
    private $mysqli;

    public function __construct() {
        $host = 'localhost';
        $username = 'Anass';
        $password = 'Anass111';
        $database = 'meetic';

        $this->mysqli = new mysqli($host, $username, $password, $database);

        if ($this->mysqli->connect_error) {
            die('Erreur de connexion à la base de données : ' . $this->mysqli->connect_error);
        }

       // echo 'Connexion à la base de données réussie.';
    }

    public function insertUtilisateur(Utilisateur $utilisateur) {
        $values = $utilisateur->getValues();
        $query = "INSERT INTO utilisateur (nom, prenom, dateNaissance, ville, email, motDePasse, loisir, genre) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->mysqli->prepare($query);
        $bindParams = array_values($values);
        $stmt->bind_param("ssssssss", ...$bindParams);

        if ($stmt->execute()) {
            //echo "<p>Utilisateur inséré avec succès.</p>";
        } else {
            //echo "Erreur lors de l'insertion de l'utilisateur : " . $stmt->error;
        }

        $stmt->close();
    }
}

