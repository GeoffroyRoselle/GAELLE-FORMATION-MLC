<?php include 'header.php'; ?>
<main>
    <div class="text-center mb-4">
        <img src="Logo GAELLE FORMATION.png" alt="Logo GAELLE" class="logo-gaelle">
    </div>

    <!-- Page vierge GAELLE -->
    <title>Inscription Formateur - GAELLE-FORMATION</title>
    <div class="container">

        <form class="registration-form" action="process_formateur_registration.php" method="post">
        <h1>Inscription Formateur</h1>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="sexe">Sexe :</label>
                    <select name="sexe" id="sexe" class="form-control" required>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" class="form-control" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="date_naissance">Date de naissance :</label>
                    <input type="date" name="date_naissance" id="date_naissance" class="form-control" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="code_postal">Code Postal :</label>
                    <input type="text" name="code_postal" id="code_postal" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="ville">Ville :</label>
                    <input type="text" name="ville" id="ville" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="centre_formation">Centre de formation :</label>
                <div class="col-lg-6 px-0">
                    <input type="text" name="centre_formation" id="centre_formation" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="departement">Département :</label>
                <div class="col-lg-6 px-0">
                    <input type="text" name="departement" id="departement" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="telephone">Téléphone :</label>
                <div class="col-lg-6 px-0">
                    <input type="tel" name="telephone" id="telephone" pattern="[0-9]{10}" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <div class="col-lg-6 px-0">
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
            </div>


            <div class="form-group">
                <label>Catégories de permis :</label>
                <div class="form-row">
                    <div class="col-6 col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="categories_permis[]" id="A" value="A" required>
                            <label class="form-check-label" for="A">A</label>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="categories_permis[]" id="B" value="B" required>
                            <label class="form-check-label" for="B">B</label>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="categories_permis[]" id="C" value="C" required>
                            <label class="form-check-label" for="C">C</label>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="categories_permis[]" id="D" value="D" required>
                            <label class="form-check-label" for="D">D</label>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="categories_permis[]" id="BE" value="BE" required>
                            <label class="form-check-label" for="BE">BE</label>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="categories_permis[]" id="CE" value="CE" required>
                            <label class="form-check-label" for="CE">CE</label>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="categories_permis[]" id="DE" value="DE" required>
                            <label class="form-check-label" for="DE">DE</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Secteur :</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="secteur[]" id="marchandise" value="marchandise" required>
                    <label class="form-check-label" for="marchandise">Marchandise</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="secteur[]" id="voyageur" value="voyageur" required>
                    <label class="form-check-label" for="voyageur">Voyageur</label>
                </div>
            </div>


            <div class="form-group">
                <label for="mot_de_passe">Mot de passe :</label>
                <div class="col-lg-6 px-0">
                    <input type="password" name="mot_de_passe" id="mot_de_passe" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="confirm_mot_de_passe">Confirmez le mot de passe :</label>
                <div class="col-lg-6 px-0">
                    <input type="password" name="confirm_mot_de_passe" id="confirm_mot_de_passe" class="form-control" required>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>



</main>
<?php include 'footer.php'; ?>