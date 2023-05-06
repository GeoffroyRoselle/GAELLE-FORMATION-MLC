<?php include 'header.php'; ?>
<main>
    <div class="container loginformateur">
        <h1>Connexion Formateur</h1>
        <form class="form" action="process_login_formateur.php" method="post">
            <div class="form-group">
                <label for="email">Adresse e-mail:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe:</label>
                <input type="password" id="mot_de_passe" name="mot_de_passe" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>

</main>
<?php include 'footer.php'; ?>