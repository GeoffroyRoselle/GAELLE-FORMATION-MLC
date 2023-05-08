<?php include 'header.php'; ?>
<?php
session_start();
// iesm_permisc.php
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login_formateur.php");
    exit;
}

?>


<main>
    <h1 class="mb-4 animate__animated animate__pulse" style="text-shadow: 2px 2px 3px rgba(0,0,0,0.3);">IESM Permis C</h1>

    <div class="container">

        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#infoContent" aria-expanded="false" aria-controls="infoContent">
            En savoir plus
        </button>
        <div class="collapse mt-3 examen" id="infoContent">
            <div class="card card-body">
                <p>Cette feuille de notation vous permettra d'évaluer vos élèves dans le cadre d'un examen plateau.</p>
                <p>Le fonctionnement est simple et intuitif et ne nécessite que votre smartphone. En effet, avec cette feuille vous pouvez :</p>
                <ul>
                    <li>Identifier l'élève et la date de l'examen</li>
                    <li>Tirer au sort une piste</li>
                    <li>Enregistrer le score de la fiche écrite</li>
                    <li>Checker le Socle 1, par simple cases à cocher</li>
                    <li>Tirer au sort un thème, avoir sous les yeux les items de celui-ci et pouvoir attribuer une note.</li>
                    <li>Tirer au sort une fiche orale, et avoir sous les yeux le texte officiel de celle-ci pour attribuer une note</li>
                    <li>Checker le Socle 2, par simple cases à cocher</li>
                    <li>Chronométrer la manoeuvre avec prise en compte du temps maximal de 5 minutes</li>
                    <li>Calcul automatique du résultat de l'examen avec prise en compte des notes éliminatoires</li>
                    <li>Enregistrement de celui-ci et possibilité de l'imprimer ou de l'envoyer par mail</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <form class="row g-3 mb-6" action="search_eleves_light.php" method="post" id="searchForm">
            <div class="col-md-3">
                <label for="nom" class="form-label">Nom :</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="nom" id="nom">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                </div>
            </div>
            <div class="col-md-3">
                <label for="prenom" class="form-label">Prénom :</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="prenom" id="prenom">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                </div>
            </div>
            <div class="col-md-3">
                <label for="date" class="form-label">Date de l'examen :</label>
                <div class="input-group">
                    <input type="date" class="form-control" name="date" id="date">
                    <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                </div>
            </div>
            <div class="col-md-3 align-self-end">
                <button type="submit" class="btn btn-primary btn-sm w-100"><i class="bi bi-search"></i></button>
            </div>
        </form>



        <div id="searchResults"></div>

        <div class="card">
            <div class="card-body">
                <h2 class="card-title">Choisissez une piste :</h2>
                <form class="form-inline">
                    <div class="form-group col-12 col-md-2">
                        <label for="piste-select" class="mr-2">Sélectionnez une piste :</label>
                        <select class="form-select form-select-sm mr-2" id="piste-select" name="piste">
                            <option value="1">Piste 1</option>
                            <option value="2">Piste 2</option>
                            <option value="3">Piste 3</option>
                            <option value="4">Piste 4</option>
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="tirerAuSortpiste()">Tirer au sort</button>
                </form>

                <div id="resultat" class="mt-3"></div>
            </div>
        </div>

        <form id="evaluation-form"></form>
        <div class="border p-3 rounded-3">
            <div class="text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3 p-3 mb-3">
                <div class="note-totale mb-3">Résultat du candidat : <span id="note-totale-valeur"></span></div>
                <div>
                    <p id="result-message"></p>
                </div>
            </div>
        </div>

    </div>
    </div>

    <div class="border p-3 rounded-3 mx-auto w-50 borderFE">
        <h3 class="text-center">Score interrogation écrite</h3>
        <div class="d-flex justify-content-center">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="FEE" id="FEE" value="-1" onchange="verifierCheckboxFE()">
                <label class="form-check-label" for="inlineRadio1">E</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="FE0" id="FE0" value="0" onchange="verifierCheckboxFE()">
                <label class="form-check-label" for="inlineRadio1">0</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="FE1" id="FE1" value="1" onchange="verifierCheckboxFE()">
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="FE2" id="FE2" value="2" onchange="verifierCheckboxFE()">
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="FE3" id="FE3" value="3" onchange="verifierCheckboxFE()">
                <label class="form-check-label" for="inlineRadio3">3</label>
            </div>
        </div>
    </div>



    <h2 class="mb-4 text-center animate__animated animate__fadeIn">Début Socle 1</h2>

    <div class="border p-3 rounded-3 mx-auto w-50 borderC1" id="etapes">
        <div class="mb-3">
            <h3>1.Contrôle de l'immobilisation</h3>
            <div class="form-check form-switch">
                <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape1" value="1" id="etape1">
                <label class="form-check-label NI" for="etape1">Le véhicule est bien immobilisé</label>
            </div>
        </div>

        <div class="mb-3">
            <h3>2.Vérification des documents de bord</h3>
            <div class="form-check form-switch">
                <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape2" value="1" id="etape2">
                <label class="form-check-label NI" for="etape2">Les pièces obligatoires sont présentes dans le
                    porte-documents</label>
            </div>
        </div>

        <div class="mb-3">
            <h3>3.Vérifications générales</h3>
            <div class="form-check form-switch">
                <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape3" value="1" id="etape3">
                <label class="form-check-label NI" for="etape3">La cabine basculante est bien
                    verrouillée</label>
            </div>
        </div>
    </div>
    <div class="border p-3 rounded-3 mx-auto w-50 borderC2" id="etapecontroles">
        <h3>4.contrôles</h3>
        <div>
            <div class="mb-3">
                <h4>Feux</h4>
                <div class="form-check form-switch">
                    <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape4" value="1" id="etape4">
                    <label class="form-check-label" for="etape4">
                        <p class="NI">le candidat vérifie l&#039absence d&#039anomalie sur
                            les feux stop, de détresse, croisement, gabarit</p>
                    </label>
                </div>
                <div class="mb-3">
                    <h4>Etat général de la carrosserie et du vitrage</h4>
                    <div class="form-check form-switch">
                        <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape5" value="1" id="etape5">
                        <label class="form-check-label" for="etape5">
                            <p class="NI">le candidat s&#039assure de l&#039absence d&#039anomalie
                                concernant la carrosserie, la caisse ou la bâche, la cabine et le vitrage pour la face
                                avant, les cotés, l&#039arrière du véhicule. Pour la vérification du vitrage, les glaces
                                des rétroviseurs sont à prendre en compte.
                            </p>
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h4>Dimensions et PTAC/MCMA :</h4>
                    <div class="form-check form-switch">
                        <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape6" value="1" id="etape6">
                        <label class="form-check-label" for="etape6">
                            <p class="NI"> le candidat annonce les longueur, largeur, hauteur et masse maximale de son
                                véhicule.
                            </p>
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h4>Roues :</h4>
                    <div class="form-check form-switch">
                        <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape7" value="1" id="etape7">
                        <label class="form-check-label" for="etape7">
                            <p class="NI"> : le candidat s&#039assure de l&#039absence d&#039anomalie relative aux roues
                                du
                                véhicule.
                            </p>
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h4>Taches :</h4>
                    <div class="form-check form-switch">
                        <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape8" value="1" id="etape8">
                        <label class="form-check-label" for="etape8">
                            <p class="NI"> le candidat vérifie sous l&#039ensemble du véhicule l&#039absence de tache.
                            </p>
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <h4>Chargement :</h4>
                    <div class="form-check form-switch">
                        <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape9" value="1" id="etape9">
                        <label class="form-check-label" for="etape9">
                            <p class="NI"> Le candidat s&#039assure de l&#039absence d&#039anomalie liée au chargement
                                en
                                ouvrant
                                une porte, le hayon, le rideau ou la bâche donnant accès au compartiment destiné aux
                                marchandises.
                                Il n&#039est pas demandé au candidat de monter dans le véhicule.
                            </p>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border p-3 rounded-3 mx-auto w-50 borderC2" id="etapetheme">
        <h3>5. Thème tiré au sort</h3>
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <button type="button" class="boutontheme" onclick="tirerAuSort()">Tirer au sort un thème</button>
                </div>
            </div>
        </div>



        <div class="alert alert-warning" role="alert">
            <div class="card-body text-center" id="themeGagnant"></div>
        </div>
        <div class="alert alert-primary NI" role="alert">
            <div class="card-body" id="texteTheme"></div>
        </div>
        <h4 class="text-center">Votre notation</h4>
        <div class="border p-3 rounded-3 mx-auto ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="form-check form-check-inline" data-toggle="buttons">
                            <label class="btn btn-primary btn-radio">
                                <input type="radio" name="options" id="option0" value="0"> 0
                            </label>
                            <label class="btn btn-primary btn-radio">
                                <input type="radio" name="options" id="option1" value="1"> 1
                            </label>
                            <label class="btn btn-primary btn-radio">
                                <input type="radio" name="options" id="option2" value="2"> 2
                            </label>
                            <label class="btn btn-primary btn-radio">
                                <input type="radio" name="options" id="option3" value="3"> 3
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="NI">Evaluation du thème tiré au sort :</h5>
        <p class="NI">La notation s&#039établit selon une attribution de points modulable : 0, 1, 2 ou 3.<br>
            Le thème comprend plusieurs items à traiter.<br>
            Notation 3 : le candidat traite correctement le thème tiré au sort, tous les items sont
            correctement traités.<br>
            Notation 2 : un item comporte au moins une erreur ou oubli, les autres sont correctement
            traités.<br>
            Notation 1 : plus d&#039un item comporte au moins une erreur ou oubli.<br>
            Notation 0 : le candidat ignore le thème (réponse pratiquement inexistante ou totalement
            erronée).<br></p>
    </div>
    <div class="border p-3 rounded-3 mx-auto w-50 borderC3" id="etapefo">
        <h3 class="text-center">6. Interrogation orale</h3>
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <button type="button" class="boutontheme" onclick="tirageAuSortFO()">Tirer au sort la
                        fiche Orale</button>
                </div>
            </div>
        </div>
        <div class="alert alert-warning" role="alert">
            <p class="text-center">Vous avez tirez au sort la <span id="theme-gagnant"></span></p>
        </div>
        <div class="alert alert-primary NI" role="alert">
            <div class="card-body" id="FO"></div>
        </div>
        <h4 class="text-center">Votre notation</h4>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="btn-group d-flex justify-content-center" data-toggle="buttons">
                        <label class="btn btn-danger">
                            <input type="radio" name="RFO" id="option0" value="-1"> E
                        </label>
                        <label class="btn btn-warning">
                            <input type="radio" name="RFO" id="option1" value="1"> 1
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="RFO" id="option2" value="2"> 2
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="RFO" id="option3" value="3"> 3
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mb-4 text-center animate__animated animate__fadeIn">Début Socle 2</h2>
    <div class="border p-3 rounded-3 mx-auto w-50 borderC3" id="s2">
        <h3>7. Mise en marche du moteur</h3>
        <p class="NI">Le candidat met le moteur en marche.<br> Il annonce les voyants restés allumés et signale
            immédiatement
            toute
            anomalie.<br> Il règle au besoin son siège, son volant, ses rétroviseurs</p>
        <div class="mb-3">
            <div class="form-check form-switch">
                <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape10" value="1" id="etape10">
                <label class="form-check-label NI" for="etape10">Annonce des anomalies
                </label>
            </div>
        </div>
        <div class="mb-3">
            <div class="form-check form-switch">
                <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape11" value="1" id="etape11">
                <label class="form-check-label NI" for="etape11">Annonce des voyants
                </label>
            </div>
        </div>
    </div>
    <div class="border p-3 rounded-3 mx-auto w-50 borderC3" id="s3">
        <h3>8. Vérification des systèmes de freinage</h3>
        <p class="NI">1- Mise en pression à l&#039intérieur des réservoirs d&#039air : le candidat s&#039assure que la
            pression
            est
            suffisante, à l&#039aide du manomètre et / ou voyants.</p>
        <div class="mb-3">
            <div class="form-check form-switch">
                <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape12" value="1" id="etape12">
                <label class="form-check-label" for="etape12">Mise en pression. Initialisation du test de frein.
                </label>
            </div>
        </div>
        <p class="NI">2- Essai pratique du frein de parc : le candidat amorce un démarrage permettant de tester la
            retenue du frein de parc, l&#039ôte, constate l&#039évolution de la pression (voyant et/ou manomètre).
        </p>
        <div class="mb-3">
            <div class="form-check form-switch">
                <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape13" value="1" id="etape13">
                <label class="form-check-label" for="etape13">Essai Frein de parc.
                </label>
            </div>
        </div>
        <p class="NI">3- Essai pratique du frein de service : le candidat engage un rapport de vitesse et avance
            significativement. Il freine et, pied sur la pédale, constate l&#039évolution de la pression (voyant
            et/ou manomètre). </p>
        <div class="mb-3">
            <div class="form-check form-switch">
                <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape14" value="1" id="etape14">
                <label class="form-check-label" for="etape14">Essai Frein de service.
                </label>
            </div>
        </div>
        <p class="NI">4- Le candidat annonce la fin des essais des systèmes de freinage.</p>
        <div class="mb-3">
            <div class="form-check form-switch">
                <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape15" value="1" id="etape15">
                <label class="form-check-label" for="etape15">Fin des essais de freins.
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="freinsKO">
                <label class="form-check-label" for="freinsKO" onclick="verifierFreins()">ELIMINATION ESSAIS
                    FREINS</label>
            </div>
        </div>
    </div>
    </div>
    <div class="border p-3 rounded-3 mx-auto w-50 borderC3" id="s4">
        <div class="mb-3">
            <div class="form-check form-switch">
                <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape16" value="1" id="etape16">
                <label class="form-check-label" for="etape16">Gestes et postures
                </label>
                <p class="NI">Est ce que vous validez le point Gestes et postures?</p>
            </div>
        </div>
    </div>



    <button type="button" class="btn btn-primary" onclick="calculerNote()">Calcul de la note</button>
    </form>
    <h2>Manoeuvre</h2>
    <div class="card" style="width: 18rem; border: 1px solid #ccc; border-radius: 5px; background-color: #f2f2f2;">
        <div class="card-body">
            <h5 class="card-title center">Manoeuvre 1</h5>
            <div style="display: flex; align-items: center; justify-content: center;">
                <p id="timer" style="font-size: 3rem; font-weight: bold; margin: 0;">00:00</p>
            </div>
            <div style="display: flex; align-items: center; justify-content: center; margin-top: 10px;">
                <button id="start" class="btn btn-primary" style="margin-right: 10px;">Démarrer</button>
                <button id="stop" class="btn btn-secondary">Arrêter</button>
            </div>
            <p id="error-message" style="display:none; color:red; margin-top: 10px;">Limite de temps atteinte !</p>
        </div>
    </div>
    <div class="container">
        <h2>Résultat Manoeuvre 1 :</h2>
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-outline-success">Réussite</button>
            <button type="button" class="btn btn-outline-danger">Échec</button>
        </div>
    </div>
    </div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
    <p id="result-message"></p>
    </div>
    <script src="app.js"></script>
</main>
<script>
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const xhr = new XMLHttpRequest();
        const formData = new FormData(event.target);

        xhr.open('POST', 'search_eleves_light.php');
        xhr.onload = function() {
            if (xhr.status === 200) {
                document.getElementById('searchResults').innerHTML = xhr.responseText;
            }
        };
        xhr.send(formData);
    });
</script>

<?php include 'footer.php'; ?>