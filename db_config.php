<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "dbs10855648";

// Créez une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
