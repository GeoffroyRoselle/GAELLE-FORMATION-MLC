<?php include 'header.php'; ?>
<main>
    <h1 class="mb-4">IESM Permis C</h1>
    <p>Cette feuille de notation vous permettra d'évaluer vos élèves dans le cadre d'un éxamen plateau.</p>
    <p>Le fonctionnement est simple et intuitif et ne necessite que votre smartphone. En effet avec cette feuille vous pouvez :</p>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <h3>Nom : <input type="text" name="nom" id="nom"></h3>
                    </div>
                    <div class="col-md-4">
                        <h3>Prénom : <input type="text" name="prenom" id="prenom"></h3>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <h3>Date de l'examen : <input type="date" name="date" id="date"></h3>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h2>Choisissez une piste :</h2>
            <form class="NI">
                <label for="piste-select">Sélectionnez une piste :</label>
                <select id="piste-select" name="piste">
                    <option value="1">Piste 1</option>
                    <option value="2">Piste 2</option>
                    <option value="3">Piste 3</option>
                    <option value="4">Piste 4</option>
                </select>
                <button type="button" onclick="tirerAuSortpiste()">Tirer au sort</button>
            </form>
            <div id="resultat"></div>
        </div>
        <form id="evaluation-form"></form>
        <div>
            <div class="note-totale">Note totale : <span id="note-totale-valeur"></span></div>
        </div class="p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
        <p id="result-message"></p>
    </div>
    </div>

    <h3>Score interrogation écrite</h3>
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






    <h2 class="mb-4">Début Socle 1</h2>

    <div class="mb-3">
        <h3>1.Contrôle de l'immobilisation</h3>
        <div class="form-check form-switch">
            <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape1" value="1" id="etape1">
            <label class="form-check-label" for="etape1">Le véhicule est bien immobilisé</label>
        </div>
    </div>

    <div class="mb-3">
        <h3>2.Vérification des documents de bord</h3>
        <div class="form-check form-switch">
            <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape2" value="1" id="etape2">
            <label class="form-check-label" for="etape2">Les pièces obligatoires sont présentes dans le
                porte-documents</label>
        </div>
    </div>

    <div class="mb-3">
        <h3>3.Vérifications générales</h3>
        <div class="form-check form-switch">
            <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape3" value="1" id="etape3">
            <label class="form-check-label" for="etape3">La cabine basculante est bien
                verrouillée</label>
        </div>
    </div>
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
    <h3>5. Thème tiré au sort</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-6 NI">
                <button type="button" class="btn btn-warning" onclick="tirerAuSort()">Tirer au sort un
                    thème</button>
            </div>
        </div>
    </div>

    <div class="alert alert-warning" role="alert">
        <div class="card-body" id="themeGagnant"></div>
    </div>
    <div class="alert alert-primary NI" role="alert">
        <div class="card-body" id="texteTheme"></div>
    </div>
    <h4>Votre notation</h4>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form-check" data-toggle="buttons">
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option0" value="0"> 0
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option1" value="1"> 1
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option2" value="2"> 2
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option3" value="3"> 3
                    </label>
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
    <h3>6. Interrogation orale</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <button type="button" class="btn btn-danger NI" onclick="tirageAuSortFO()">Tirer au sort la
                    fiche Orale</button>
            </div>
        </div>
    </div>
    <div class="p-3 mb-2 bg-danger text-white">
        <p>Vous avez tirez au sort la <span id="theme-gagnant"></span></p>
    </div>
    <div class="alert alert-primary NI" role="alert">
        <div class="card-body" id="FO"></div>
    </div>
    <h4>Votre notation</h4>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="btn-group" data-toggle="buttons">
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
    <h2 class="mb-4">Début Socle 2</h2>
    <h3>7. Mise en marche du moteur</h3>
    <p class="NI">Le candidat met le moteur en marche.<br> Il annonce les voyants restés allumés et signale
        immédiatement
        toute
        anomalie.<br> Il règle au besoin son siège, son volant, ses rétroviseurs</p>
    <div class="mb-3">
        <div class="form-check form-switch">
            <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape10" value="1" id="etape10">
            <label class="form-check-label" for="etape10">Annonce des anomalies
            </label>
        </div>
    </div>
    <div class="mb-3">
        <div class="form-check form-switch">
            <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape11" value="1" id="etape11">
            <label class="form-check-label" for="etape11">Annonce des voyants
            </label>
        </div>
    </div>
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
            <label class="form-check-label" for="etape15">Essai Frein de service.
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="freinsKO">
            <label class="form-check-label" for="freinsKO" onclick="verifierFreins()">ELIMINATION ESSAIS
                FREINS</label>
        </div>
    </div>
    </div>
    <div class="mb-3">
        <div class="form-check form-switch">
            <input class="form-check-input form-switch" type="checkbox" role="switch" name="etape16" value="1" id="etape16">
            <label class="form-check-label" for="etape16">Gestes et postures
            </label>
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
</main>
<?php include 'footer.php'; ?>