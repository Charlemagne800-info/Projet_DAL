<?php

require 'config.php';

class Database
{
    private $pdo;
    // constructeur de la classe Database qui permet de se connecter à la base de données grâce à config.php
    public function __construct()
    {
        global $dbConfig;
        $this->pdo = new PDO("mysql:host={$dbConfig['host']};dbname={$dbConfig['dbname']}", $dbConfig['user'], $dbConfig['password']);
        // permet d'afficher les erreurs SQL
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function execute($query, $params = [])
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }
}
