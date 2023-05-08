<?php include 'header.php'; ?>
<main>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center my-4">Inscription Élève</h2>
                <div id="success-message" class="alert alert-success d-none" role="alert">
                    L'élève précédent a été enregistré avec succès. Vous pouvez maintenant inscrire un autre élève.
                </div>
                <form class="incriptioneleve" id="inscription-form" method="post">
                    <div class="form">
                        <div class="form-group col-md-6">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="sexe">Sexe</label>
                                <select class="form-control" id="sexe" name="sexe">
                                    <option value="">Choisir...</option>
                                    <option value="homme">Homme</option>
                                    <option value="femme">Femme</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="date_naissance">Date de naissance</label>
                        <input type="date" class="form-control" id="date_naissance" name="date_naissance">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="code_postal">Code postal</label>
                            <input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="Code postal">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ville">Ville</label>
                            <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville">
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Téléphone">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="num_permis">Numéro de permis</label>
                        <input type="text" class="form-control" id="num_permis" name="num_permis" placeholder="Numéro de permis">
                    </div>
                    <div class="form-group">
                        <label for="aptitude_medicale">Aptitude médicale</label>
                        <input type="checkbox" id="aptitude_medicale" name="aptitude_medicale" value="1">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="date_visite_medicale">Date de visite médicale</label>
                        <input type="date" class="form-control" id="date_visite_medicale" name="date_visite_medicale">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="formation">Formation</label>
                        <select class="form-control" id="formation" name="formation">
                            <option value="">Choisir...</option>
                            <option value="TP CTRMP">TP CTRMP</option>
                            <option value="TP CTCR">TP CTCR</option>
                            <option value="TP CTRMTV">TP CTRMTV</option>
                            <option value="TP CTRVU">TP CTRVU</option>
                            <!-- Ajoutez d'autres options de formation si nécessaire -->
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Inscrire l'élève.</button>
                </form>
                <p>Si vous souhaitez enregistrer un autre élève cliquez ci-dessous</p>
                <button id="add-another" class="btn btn-secondary mt-2">Ajouter un autre élève</button>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            // Intercepter la soumission du formulaire
            $('#inscription-form').on('submit', function(e) {
                // Empêcher la soumission normale du formulaire
                e.preventDefault();

                // Envoyer les données du formulaire via AJAX
                $.ajax({
                    url: 'process_inscription.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        // Afficher le message de réussite
                        $('#success-message').text(response).removeClass('d-none');

                        // Réinitialiser le formulaire
                        $('#inscription-form').trigger('reset');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Afficher le message d'erreur
                        $('#success-message').text('Une erreur s\'est produite lors de l\'inscription. Veuillez réessayer.').addClass('alert-danger').removeClass('d-none');
                    },
                });
            });

            // Gérer le clic sur le bouton "Ajouter un autre"
            $("#add-another").on("click", function() {
                $("#inscription-form").trigger("reset");
                $("#success-message").removeClass("d-none");
            });
        });
    </script>



</main>
<?php include 'footer.php'; ?>