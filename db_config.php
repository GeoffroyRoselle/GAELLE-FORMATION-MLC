<?php
$servername = "89.117.169.204";
$username = "u825852800_MLC";
$password = "Gaelleformation64";
$dbname = "u825852800_GAELLE";

// Créez une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
