<?php

require 'config.php';

try {
    // Connexion à la base de données avec le json de config.php
    $pdo = new PDO("mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']}", $dbConfig['user'], $dbConfig['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour créer la table fake_users, ça évite de passer par phpMyAdmin ou de faire un script.sql
    $query = "
        CREATE TABLE IF NOT EXISTS fake_users (
            id INT PRIMARY KEY AUTO_INCREMENT,
            prenom VARCHAR(255),
            nom VARCHAR(255),
            localisation VARCHAR(255),
            email VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )
    ";

    // Exécution de la requête
    $pdo->exec($query);

    echo "<p>Table fake_users créée avec succès.<p>";

} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
