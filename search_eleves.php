<?php
session_start();
require_once 'db_config.php';
// La connexion à la base de données est déjà ouverte sur cette page

// Vérifiez si la requête est une méthode GET et si une requête de recherche est fournie
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['query'])) {
    $searchQuery = $_GET['query'];

    // Préparer la requête de recherche
    $sql = "SELECT * FROM eleves WHERE nom LIKE ? OR prenom LIKE ?";

    if ($stmt = $conn->prepare($sql)) {
        // Lier les paramètres
        $searchParam = '%' . $searchQuery . '%';
        $stmt->bind_param("ss", $searchParam, $searchParam);

        // Exécuter la requête
        if ($stmt->execute()) {
            // Récupérer les résultats
            $result = $stmt->get_result();

            // Afficher les résultats de la recherche
            if ($result->num_rows > 0) {
                echo '<ul class="list-group">';
                while ($row = $result->fetch_assoc()) {
                    echo '<li class="list-group-item">';
                    echo 'Nom : ' . $row['nom'] . '<br>';
                    echo 'Prénom : ' . $row['prenom'] . '<br>';
                    echo 'Date de naissance : ' . $row['date_naissance'] . '<br>';
                    echo 'Numéro de permis : ' . $row['num_permis'] . '<br>';
                    echo 'Numéro de téléphone : ' . $row['telephone'] . '<br>';
                    echo 'Aptitude médicale : ';
                    if ($row['aptitude_medicale'] == 1) {
                        echo 'Visite médicale OK';
                    } else {
                        echo 'Visite médicale à passer';
                    }
                    echo '<br>Formation : ' . $row['formation'];
                    echo '</li>';
                }
                echo '</ul>';
            } else {
                echo '<p class="text-info">Aucun élève ne correspond à votre recherche.</p>';
            }
        } else {
            echo "Erreur : " . $stmt->error;
        }

        // Fermer le statement
        $stmt->close();
    }

    // Fermer la connexion
    $conn->close();
}
