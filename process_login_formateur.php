<?php
session_start();
require_once 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $sql = "SELECT id, mot_de_passe FROM Formateurs WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($mot_de_passe, $row['mot_de_passe'])) {
            $_SESSION['formateurs_id'] = $row['id'];
            header("Location: espace_formateur.php");
            exit();
        } else {
            echo "Le mot de passe est incorrect.";
        }
    } else {
        echo "Aucun compte trouvé avec cette adresse e-mail.";
    }

    $stmt->close();
}

$conn->close();
