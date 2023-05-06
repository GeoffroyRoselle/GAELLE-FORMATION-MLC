<?php
// Incluez ici le fichier de configuration de la connexion à la base de données
require_once "db_config.php";

// Vérifiez si les données ont été soumises via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Récupérez les données du formulaire
    $sexe = $_POST["sexe"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date_naissance = $_POST["date_naissance"];
    $code_postal = $_POST["code_postal"];
    $ville = $_POST["ville"];
    $centre_formation = $_POST["centre_formation"];
    $departement = $_POST["departement"];
    $telephone = $_POST["telephone"];
    $email = $_POST["email"];
    $categories_permis = implode(',', $_POST["categories_permis"]);
    $secteur = implode(',', $_POST["secteur"]);
    $mot_de_passe = $_POST["mot_de_passe"];
    $confirm_mot_de_passe = $_POST["confirm_mot_de_passe"];

    // Vérifiez si les mots de passe correspondent
    if ($mot_de_passe != $confirm_mot_de_passe) {
        echo "Les mots de passe ne correspondent pas.";
        exit;
    }

    // Hachez le mot de passe avant de l'insérer dans la base de données
    $hashed_password = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    // Préparez la requête SQL pour insérer les données
    $sql = "INSERT INTO formateurs (sexe, nom, prenom, date_naissance, code_postal, ville, centre_formation, departement, telephone, email, categories_permis, secteur, mot_de_passe)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Préparez et exécutez la requête préparée
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssssssssssss", $sexe, $nom, $prenom, $date_naissance, $code_postal, $ville, $centre_formation, $departement, $telephone, $email, $categories_permis, $secteur, $hashed_password);

        if ($stmt->execute()) {
            echo "Inscription réussie !";
        } else {
            echo "Erreur lors de l'inscription, veuillez réessayer.";
        }
    } else {
        echo "Erreur lors de la préparation de la requête, veuillez réessayer.";
    }

    // Fermez la connexion à la base de données
    $stmt->close();
    $conn->close();
}
