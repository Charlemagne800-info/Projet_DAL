<?php

require 'UserTableManager.php';

$userTableManager = new UserTableManager();

// Vérifie si une action est spécifiée dans l'URL
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Initialise le tableau de réponse
$response = array();

// Choix entre chaque opération du CRUD
switch ($action) {
    case 'create':
        // Vérifie si les données nécessaires sont présentes dans l'URL
        if (isset($_GET['prenom'], $_GET['nom'], $_GET['localisation'], $_GET['email'])) {
            // Appelle la méthode "addFakeUser" de l'objet "userTableManager" pour créer un faux utilisateur
            $userTableManager->addFakeUser($_GET['prenom'], $_GET['nom'], $_GET['localisation'], $_GET['email']);
            $response['success'] = true;
            $response['message'] = "Faux utilisateur créé avec succès";
        } else {
            $response['success'] = false;
            $response['message'] = "Paramètres manquants pour la création de l'utilisateur";
        }
        break;
    case 'update':
        if (isset($_GET['id'], $_GET['prenom'], $_GET['nom'], $_GET['localisation'], $_GET['email'])) {
            $userTableManager->updateFakeUser($_GET['id'], $_GET['prenom'], $_GET['nom'], $_GET['localisation'], $_GET['email']);
            $response['success'] = true;
            $response['message'] = "Faux utilisateur mis à jour avec succès";
        } else {
            $response['success'] = false;
            $response['message'] = "Paramètres manquants pour la mise à jour de l'utilisateur";
        }
        break;
    case 'delete':      
        if (isset($_GET['id'])) {
            $userTableManager->deleteFakeUser($_GET['id']);
            $response['success'] = true;
            $response['message'] = "Faux utilisateur supprimé avec succès";
        } else {
            $response['success'] = false;
            $response['message'] = "Paramètres manquants pour la suppression de l'utilisateur";
        }
        break;
    case 'read':
        $users = $userTableManager->getAllFakeUsers();
        // Affiche une liste imbriquée en HTML des utilisateurs
        echo "<h2>Liste des utilisateurs :</h2>";
        echo "<ul>";
        foreach ($users as $user) {
            echo "<li>ID: {$user['id']}";
            echo "<ul>";
            echo "<li>Prenom: {$user['prenom']}</li>";
            echo "<li>Nom: {$user['nom']}</li>";
            echo "<li>Localisation: {$user['localisation']}</li>";
            echo "<li>Email: {$user['email']}</li>";
            echo "</ul>";
            echo "</li>";
        }
        echo "</ul>";
        // Fin de script sinon il attend continuellement une action
        exit;
    default:
        $response['success'] = false;
        $response['message'] = "Action non spécifiée ou non valide";
        echo "<ul>";
        echo "Exemple d'URL : ";
        echo "<li>Create ==> http://localhost/Projet_DAL/?action=create&prenom=Valentin&nom=Charlemagne&localisation=Aix&email=valentin.charlemagne@ynov.com</li>";
        echo "<li>Read ==> http://localhost/Projet_DAL/?action=read</li>";
        echo "<li>Update ==> http://localhost/Projet_DAL/?action=update&id=1&prenom=Patrick&nom=Charlemagne&localisation=Aix&email=valentin.charlemagne@ynov.com</li>";
        echo "<li>Delete ==> http://localhost/Projet_DAL/?action=delete&id=1</li>";
        echo "<ul>";
        break;
}

// Affiche le résultat en HTML
if ($response['success']) {
    echo "<p style='color: green'>" . $response['message'] . "</p>";
} else {
    echo "<p style='color: red'>" . $response['message'] . "</p>";
}

