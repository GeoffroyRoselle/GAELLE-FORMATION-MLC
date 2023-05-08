<?php

session_start();
require_once 'db_config.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

$sql = "SELECT * FROM Eleves WHERE nom LIKE ? AND prenom LIKE ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nom, $prenom);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row['nom'] . " " . $row['prenom'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Aucun élève trouvé.";
}

$stmt->close();
$conn->close();
