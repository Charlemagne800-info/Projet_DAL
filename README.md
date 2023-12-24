# Projet_DAL
[![made-with-php](https://img.shields.io/badge/Made%20with-PHP-1f425f.svg)](https://www.php.net/)
[![made-with-Visual-Studio-Code](https://img.shields.io/badge/Made%20with-Visual%20Studio%20Code-1f425f.svg)](https://code.visualstudio.com/)


## Description :
Projet_DAL qui à pour but d'initier à la création d'un DAL en mettant en place une API CRUD et une BDD

L'objectif étant de faire communiquer les 2 en utilisant le DAL

## Fonctionnalités :
Créer de fausses identités/utilisateurs en passant des arguments dans l'url du fichier endpoint


## Installation et Fonctionnement:
Télécharge l'archive, extrayez le dossier dans le **dossier /www/ de wamp64**

En amont du dossier **/www/ dans le dossier /wamp64/, créer un dossier Crédentials contenant un fichier db.json**

Inscrivez les informations nécessaire à la connection à la BDD comme ceci : 
```
{
    "host": "localhost",
    "dbname": "<Nom_BDD>",
    "user": "<A_compléter>",
    "password": "<A_compléter>"
}
```
Le projet devrait ressembler à cela : 

![image](https://github.com/Charlemagne800-info/Projet_DAL/assets/113009479/99fd22aa-68e1-4834-a36a-af5d53100b24)


**Créez une base de données vierge** se nommant <Nom_BDD> grâce à PhpMyAdmin ou autre

***Aller à http://localhost/Projet_DAL/create_table.php pour créer automatiquement la table nécessaire***

Une fois la table créée, aller à l'addresse http://localhost/Projet_DAL/

Des exemples de ce qui est attendu sera affiché pour chaque action

## Fabriqué avec :

* [PHP](https://www.php.net/)
* [Virtual Studio Code](https://code.visualstudio.com/)
* [JSON](https://www.json.org/)


## L'Equipe de 1 :
* **Charlemagne Valentin** https://github.com/Charlemagne800-info
