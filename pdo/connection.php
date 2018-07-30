<?php

try {
    $database = new PDO('mysql:host=localhost;dbname=minichat_lundi;charset=utf8', 'root', '');
}
catch(Exception $e) {
    die('Erreur : Connexion échouée ' . $e->getMessage());
}