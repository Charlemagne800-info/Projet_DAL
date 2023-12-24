<?php

require 'Database.php';

class UserTableManager
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addFakeUser($prenom, $nom, $localisation, $email)
    {
        $query = "INSERT INTO fake_users (prenom, nom, localisation, email) VALUES (?, ?, ?, ?)";
        $params = [$prenom, $nom, $localisation, $email];
        $this->db->execute($query, $params);
    }

    public function updateFakeUser($id, $prenom, $nom, $localisation, $email)
    {
        $query = "UPDATE fake_users SET prenom = ?, nom = ?, localisation = ?, email = ? WHERE id = ?";
        $params = [$prenom, $nom, $localisation, $email, $id];
        $this->db->execute($query, $params);
    }

    public function deleteFakeUser($id)
    {
        $query = "DELETE FROM fake_users WHERE id = ?";
        $params = [$id];
        $this->db->execute($query, $params);
    }

    public function getAllFakeUsers()
    {
    $query = "SELECT * FROM fake_users";
    $stmt = $this->db->execute($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
