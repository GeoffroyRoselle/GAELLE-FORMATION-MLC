<?php

// Inclure le fichier de configuration de la base de données
require_once 'db_config.php';

// Vérifier si la requête est une méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupérer les données du formulaire
    $sexe = $_POST['sexe'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $adresse = $_POST['adresse'];
    $code_postal = $_POST['code_postal'];
    $ville = $_POST['ville'];
    $telephone = $_POST['telephone'];
    $num_permis = $_POST['num_permis'];
    $aptitude_medicale = isset($_POST['aptitude_medicale']) ? 1 : 0;
    $date_visite_medicale = $_POST['date_visite_medicale'];
    $formation = $_POST['formation'];

    // Utiliser la connexion à la base de données définie dans db_config.php
    global $conn;

    // Préparer la requête d'insertion
    $sql = "INSERT INTO eleves (sexe, nom, prenom, date_naissance, adresse, code_postal, ville, telephone, num_permis, aptitude_medicale, date_visite_medicale, formation)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        // Lier les paramètres
        $stmt->bind_param("ssssssssssis", $sexe, $nom, $prenom, $date_naissance, $adresse, $code_postal, $ville, $telephone, $num_permis, $aptitude_medicale, $date_visite_medicale, $formation);



        // Exécuter la requête
        if ($stmt->execute()) {
            echo "Nouvel élève ajouté avec succès.";
        } else {
            echo "Erreur : " . $stmt->error;
        }

        // Fermer le statement
        $stmt->close();
    }

    // Fermer la connexion
    $conn->close();
}
