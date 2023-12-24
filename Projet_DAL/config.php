<?php

// Récupération du chemin complet du fichier db.json
$dbConfigPath = __DIR__ . '\..\..\Credentials\db.json';

// Décode le contenu du json pour l'utiliser
$dbConfig = json_decode(file_get_contents($dbConfigPath), true);

