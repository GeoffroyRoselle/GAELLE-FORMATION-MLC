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
    <h2>
        Bonjour <?php echo htmlspecialchars($formateur['prenom']); ?> <?php echo htmlspecialchars($formateur['nom']); ?>, bienvenue sur votre interface formateur
    </h2>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Formations en cours</h2>
                <!-- Liste des formations en cours ici -->

                <div class="d-flex justify-content-between mb-4">
                    <button class="btn btn-primary" id="create-formation">Créer une formation</button>
                    <a href="inscription_eleve.php" class="btn btn-success">Enregistrer un élève</a>
                </div>
                <!-- module de recherche d'un élève-->
                <!-- module de recherche d'un élève-->
                <div class="form-group mb-4 col-md-6">
                    <label for="search">Rechercher un élève:</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="search" placeholder="Nom de l'élève">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="search-button">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!--Affichage du résultat de la recherche-->
                <div id="search-results" class="mt-4"></div>



                <h2>Tableau de bord</h2>
                <!-- code php pour compter le nombre d'élèves-->
                <?php
                function getStudentsCount($conn)
                {
                    $sql = "SELECT COUNT(*) as count FROM eleves";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        return $row['count'];
                    }

                    return 0;
                }
                $studentsCount = getStudentsCount($conn);
                ?>
                <!--fin du code PHP-->
                <p>Nombre d'élèves inscrits: <span id="studentsCount"><?php echo $studentsCount; ?></span></p>
            </div>

            <div class="col-md-4">
                <h2>Outils</h2>
                <a href="iesm_permisc.php" class="btn btn-info">IESM Permis C</a>

                <!-- Autres boutons d'outils ici -->
            </div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function() {
        // Intercepter les événements d'entrée dans le champ de recherche
        $('#search').on('input', function() {
            var searchQuery = $(this).val();

            if (searchQuery) {
                // Envoyer la requête de recherche via AJAX
                $.ajax({
                    url: 'search_eleves.php',
                    type: 'GET',
                    data: {
                        query: searchQuery
                    },
                    success: function(response) {
                        // Vider les résultats précédents
                        $("#search-results").empty();

                        // Afficher les résultats de la recherche
                        $('#search-results').html(response);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Afficher le message d'erreur
                        $('#search-results').html('<p class="text-danger">Une erreur s\'est produite lors de la recherche. Veuillez réessayer.</p>');
                    },
                });
            } else {
                // Réinitialiser les résultats de la recherche si la requête est vide
                $('#search-results').html('');
            }
        });
    });
</script>





<?php include 'footer.php'; ?>