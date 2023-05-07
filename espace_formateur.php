<?php
session_start();

if (!isset($_SESSION['formateurs_id'])) {
    header("Location: login_formateur.php");
    exit();
}

$formateur_id = $_SESSION['formateurs_id'];

require_once 'db_config.php';

$sql = "SELECT * FROM Formateurs WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $formateur_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $formateur = $result->fetch_assoc();
} else {
    echo "Aucun formateur trouvé avec cet ID.";
    exit();
}
include 'header.php'; ?>
<main>
    <h1>Votre Compte Formateur</h1>
    <table>
        <tr>
            <td>Nom:</td>
            <td><?php echo htmlspecialchars($formateur['nom']); ?></td>
        </tr>
        <tr>
            <td>Prénom:</td>
            <td><?php echo htmlspecialchars($formateur['prenom']); ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo htmlspecialchars($formateur['email']); ?></td>
        </tr>

    </table>
</main>



<?php include 'footer.php'; ?>