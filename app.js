function tirerAuSortpiste() {
    const pistes = document.getElementById("piste-select").options;
    const index = Math.floor(Math.random() * pistes.length);
    const piste = pistes[index].text;
    console.log(`La piste tirée au sort est : ${piste}`);
    document.getElementById("resultat").innerHTML = `La piste tirée au sort est : ${piste}`;
}
//checker que l'utilisateur ne coche que une seule case
function verifierCheckboxFE() {
    const checkboxes = document.querySelectorAll('#FEE, #FE0, #FE1, #FE2, #FE3');
    let checkedCount = 0;
    for (let i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            checkedCount++;
            if (checkedCount > 1) {
                alert("Vous ne pouvez cocher qu'une seule option.");
                checkboxes[i].checked = false;
                break;
            }
        }
    }
}
//couleur du cadre IE
function verifierCheckboxFE() {
    let FEE = document.getElementById("FEE");
    let FE0 = document.getElementById("FE0");
    let FE1 = document.getElementById("FE1");
    let FE2 = document.getElementById("FE2");
    let FE3 = document.getElementById("FE3");
    let divCadre = document.querySelector(".borderFE");

    if (FEE.checked) {
        divCadre.style.backgroundColor = "red";
    } else if (FE1.checked || FE2.checked || FE3.checked) {
        divCadre.style.backgroundColor = "green";
    } else {
        divCadre.style.backgroundColor = "";
    }
}
//couleur cadre étape 1-2-3
let etape1Input = document.getElementById("etape1");
let etape2Input = document.getElementById("etape2");
let etape3Input = document.getElementById("etape3");

// Fonction pour mettre à jour le background de la border en fonction des cases cochées
function mettreAJourBackground() {
    let etapesDiv = document.getElementById("etapes");
    if (etape1Input.checked || etape2Input.checked || etape3Input.checked) {
        etapesDiv.classList.add("bg-light");
    } else {
        etapesDiv.classList.remove("bg-light");
    }
}

// Ajouter un écouteur d'événement "change" pour chaque case
etape1Input.addEventListener("change", mettreAJourBackground);
etape2Input.addEventListener("change", mettreAJourBackground);
etape3Input.addEventListener("change", mettreAJourBackground);
// coulour cadre étape 4
// Récupérer les éléments HTML
let etapesDiv = document.getElementById("etapecontroles");
let etape4Input = document.getElementById("etape4");

// Fonction pour mettre à jour le background de la border en fonction des cases cochées
function mettreAJourBackground() {
    if (etape4Input.checked) {
        etapesDiv.classList.add("grey");
    } else {
        etapesDiv.classList.remove("grey");
    }
}

// Ajouter un événement de changement d'état pour l'étape 4
etape4Input.addEventListener("change", mettreAJourBackground);

function verifierFreins() {
    const caseCochee = document.getElementById("freinsKO").checked;
    if (caseCochee) {
        alert("Game Over !");
    }
}
// Récupération des cases à cocher
var cases = document.querySelectorAll('#s2 input[type="checkbox"]');

// Ajout d'un écouteur d'événement sur chaque case
cases.forEach(function (caseACocher) {
    caseACocher.addEventListener('change', function () {
        // Récupération de la div s2
        var s2 = document.querySelector('#s2');

        // Vérification si au moins une des cases est cochée
        var auMoinsUneCaseEstCochee = false;
        cases.forEach(function (caseACocher) {
            if (caseACocher.checked) {
                auMoinsUneCaseEstCochee = true;
            }
        });

        // Ajout ou suppression de la classe "etapes-cochees"
        if (auMoinsUneCaseEstCochee) {
            s2.classList.add('etapes-cochees');
        } else {
            s2.classList.remove('etapes-cochees');
        }
    });
});
// background pour les essais de freins
function verifierFreins() {
    var freinsKO = document.getElementById("freinsKO");
    var s3 = document.getElementById("s3");
    if (freinsKO.checked) {
        s3.classList.add("bg-red");
        s3.classList.remove("bg-light-gray");
    } else if (
        document.getElementById("etape12").checked ||
        document.getElementById("etape13").checked ||
        document.getElementById("etape14").checked ||
        document.getElementById("etape15").checked
    ) {
        s3.classList.add("bg-light-gray");
        s3.classList.remove("bg-red");
    } else {
        s3.classList.remove("bg-light-gray");
        s3.classList.remove("bg-red");
    }
}

document.getElementById("etape12").addEventListener("click", verifierFreins);
document.getElementById("etape13").addEventListener("click", verifierFreins);
document.getElementById("etape14").addEventListener("click", verifierFreins);
document.getElementById("etape15").addEventListener("click", verifierFreins);
document.getElementById("freinsKO").addEventListener("click", verifierFreins);
//contre G/P
function verifierGestesPostures() {
    var s4 = document.getElementById("s4");
    var etape16 = document.getElementById("etape16");
    if (etape16.checked) {
        s4.classList.add("border-success");
    } else {
        s4.classList.remove("border-success");
    }
}


// Tirage au sort et affichage du thème
function tirerAuSort() {
    var themes = ["thème 1", "thème 2", "thème 3", "thème 4", "thème 5", "thème 6"];
    var indexThemeGagnant = Math.floor(Math.random() * 6);
    var themeGagnant = themes[indexThemeGagnant];
    var texteTheme;

    switch (themeGagnant) {
        case "thème 1":
            texteTheme = `Thème 1 : documents de bord, triangle, extincteur (8 items) Le candidat présente le contenu du porte-documents présent dans le véhicule : <br>
1 - certificat d'immatriculation (concordance et validité de la visite technique) ;<br>
2 - certificat d'assurance (concordance et validité) ;<br>
3 - carte routière détaillée du secteur d'examen, taxe à lessieu ;<br>
4 - constat amiable ;<br>
5 - manuel d'utilisation. <br>
Rappel : les documents ne doivent comporter aucune mention supplémentaire à l&#039original, surlignage ou autres annotations (art. 1er de l&#039arrêté du 23 avril 2012 modifié). <br>
Il s'assure de la présence :<br>
6 - du triangle de présignalisation et de l&#039éthylotest obligatoire ;<br>
7 - de(s) l'extincteur(s) ;<br>
8 - du vêtement de haute visibilité. <br>
Il n&#039est pas fait référence au vêtement de haute visibilité lorsqu&#039il est porté par le candidat."`;
            break;
        case "thème 2":
            texteTheme = `Thème 2 : feux, dispositifs de contrôle et accessoires (6 items)<br>
Le candidat vérifie l'état et le fonctionnement de :<br>
• 3 feux, choisis par l&#039expert dans la liste suivante : feux de position, feux de croisement, <br>
feux de route, feux de brouillard avant, feux de brouillard arrière, feux de marche arrière, feux stop, <br>
feux d'encombrement, feux indicateurs de changement de direction, feux de détresse, feux de plaques d'immatriculation, <br>
feux diurnes, feuxd'angle, feux de stationnement ...<br>
L&#039expert veille à ne pas demander un contrôle déjà effectué lors des vérifications courantes de sécurité.<br>
Le candidat doit connaître l'emplacement, le rôle et le fonctionnement des dispositifs de contrôle et des accessoires.<br>
L'expert interroge le candidat sur :<br>
• 2 dispositifs de contrôle (voyants, témoins, ordinateur de bord, cadrans de contrôle..., à l'exclusion du chronotachygraphe) ;<br>
• 1 accessoire (essuie-glaces, ventilation, avertisseur sonore, commandes..., à l'exclusion de l'autoradio<br>
et du système de navigation par satellite). ` ;
            break;
        case "thème 3":
            texteTheme = `Thème 3 : niveaux, glaces, rétroviseurs, essuie-glaces <br>
                (6 items maxi. en fonction de l'équipement et de l'accessibilité du véhicule)<br>
Le candidat annonce et montre les orifices de remplissage des différents niveaux :<br>
1 - huile moteur, liquide de refroidissement, lave-glace ;<br>
2 - liquide dépolluant (AdBlue/urée) ;<br>
3 - assistance de direction, assistance d'embrayage, liquide de frein.<br>
Il annonce les contrôles à effectuer concernant :<br>
4 - les rétroviseurs (état et fixation) ;<br>
5 - les glaces et pare-brise (état et propreté) ;<br>
6 - les essuie-glaces (état)`;
            break;
        case "thème 4":
            texteTheme = `Thème 4 : pneumatiques, roues, suspension, direction (3 items)<br>
Le candidat contrôle une roue (en cas de présence d'un essieu jumelé, le contrôle se fera impérativement sur un jumelage) :<br>
1 - pneumatique : état de la bande de roulement, des flancs, pression visuelle.<br>
2 - roue et suspension : si le carrossage et/ou l&#039enjoliveur le permettent :<br>
o le candidat s'assure de l'absence de corps étranger dans le jumelage ;<br>
o il vérifie la présence et le serrage apparent des écrous de roues ;<br>
o il contrôle visuellement l'état de la suspension (état des lames, des coussins<br>
d'air, absence de fuite d'air, de fuite hydraulique sur amortisseur...) et du gardeboue.<br>
3 - assistance de direction :<br>
vérification du niveau du bocal d&#039assistance de direction ;<br>
un essai en tournant le volant d'un demi-tour environ, en avançant sur une
courte distance (afin d'éviter de tourner les roues en statique) pour vérifier<br>
l'absence de bruits anormaux et de points de résistance.<br>
Pour éviter un démarrage supplémentaire du véhicule, ce contrôle de<br>
l&#039assistance de direction s&#039effectuera juste avant le repérage du<br>
parcours de maniabilité.<br>
A cet effet, le candidat fera le contrôle du bocal d&#039assistance de direction<br>
suivi d&#039une explication théorique de l&#039essai. Son évaluation et l&#039attribution<br>
de la notation porteront uniquement sur ces deux éléments.<br>
L&#039essai pratique est réalisé mais non évalué. Compte tenu du<br>
positionnement de cet essai, l&#039expert pourra rappeler au candidat qu&#039il doit<br>
l&#039effectuer avant le repérage de l&#039épreuve de maniabilité en marche avant. `;
            break;
        case "thème 5":
            texteTheme = `Thème 5 : caractéristiques du véhicule, plaques, disques limitations de vitesses, dispositifs réfléchissants / catadioptres, <br>
                protections latérales et arrière (6 items)<br>
Le candidat présente son véhicule :<br>
1 - marque, type, puissance ;<br>
2 - il annonce les porte-à-faux avant et arrière.<br>
Il vérifie la présence et l'état :<br>
3 - des plaques (tare et immatriculation) ;<br>
4 - des disques de limitation de vitesses ;<br>
5 - des dispositifs réfléchissants (catadioptres) arrières et latéraux et du dispositif<br>
complémentaire de signalisation arrière ;<br>
6 - le cas échéant, des dispositifs latéraux de protection et anti-encastrement arrière.`;
            break;
        case "thème 6":
            texteTheme = `Thème 6 : transport de marchandises (4 items)<br>
Le candidat :<br>
1 - contrôle l&#039ouverture de l&#039accès au compartiment marchandises en ouvrant les<br>
portes, le hayon, le rideau ou la bâche. En présence de portes, le candidat doit les fixer<br>
en position ouverte à l&#039aide des dispositifs prévus.<br>
2 - Contrôle l&#039état et l&#039étanchéité du compartiment marchandises, en montant dans le<br>
compartiment si nécessaire.<br>
3 - annonce le poids et la nature du chargement, vérifie sa répartition et son arrimage.<br>
4 - ferme l'accès au compartiment marchandises et s'assure qu'il est correctement<br>
fermé.`;
            break;
        default:
            texteTheme = "Une erreur est survenue.";
    }
    document.getElementById("themeGagnant").innerHTML = "Thème gagnant: " + themeGagnant;
    document.getElementById("texteTheme").innerHTML = texteTheme;
}
//Fiche Orale
function tirageAuSortFO() {
    // Tableau contenant les 12 thèmes possibles
    const themes = ["Fiche n° 1", "Fiche n° 2", "Fiche n° 3", "Fiche n° 4", "Fiche n° 5", "Fiche n° 6", "Fiche n° 7", "Fiche n° 8", "Fiche n° 9", "Fiche n° 10", "Fiche n° 11", "Fiche n° 12"];

    // Tirage au sort d'un index aléatoire dans le tableau
    const index = Math.floor(Math.random() * themes.length);

    // Récupération du thème gagnant
    const themeGagnantFO = themes[index];
    var FO;



    // Textes pour aide à la décision des fiches orales
    switch (themeGagnantFO) {
        case "Fiche n° 1":
            FO = `FICHE 1 Éléments de réponse<br>
Conduite dans des conditions atmosphériques difficiles, route de nuit.<br>
Conduite et comportement.<br>
Pluie :<br>
Réduire la vitesse et respecter la réglementation spécifique, augmenter les distances<br>
de sécurité, éviter les freinages brusques, utiliser au maximum le frein moteur,<br>
allumer les feux sauf le(s) brouillard arrière(s), utiliser les accessoires (ventilation /<br>
climatisation, dégivrage des rétroviseurs …).<br>
Brouillard :<br>
Réduire la vitesse et respecter la réglementation spécifique, respecter les distances<br>
de sécurité, allumer les feux de croisement ou de brouillard, se guider à l'aide du<br>
marquage au sol.<br>
Vent :<br>
Réduire la vitesse, prévoir et éviter les écarts de direction surtout lorsque des zones<br>
abritées et des zones exposées se succèdent (ponts, bâtiments, croisements et<br>
dépassements ...) et que son véhicule circule à vide.<br>
Neige et verglas :<br>
Réduire la vitesse, augmenter la distance de sécurité, utiliser les équipements<br>
autorisés, utiliser les commandes avec souplesse, respecter la réglementation<br>
(barrières de dégel). Allumer les feux.<br>
Nuit :<br>
Les accidents sont 2 fois plus graves que le jour. Ils sont la conséquence d'une<br>
vitesse supérieure, du manque de visibilité, de la fatigue et de l&#039absorption d'alcool.<br>
Ceux qui ont une mauvaise acuité visuelle auront d'autant plus de problèmes qu'ils<br>
conduiront la nuit.<br>
Par ailleurs, la sensibilisation à l'éblouissement, qui sera d'autant plus importante<br>
que le sujet aura un problème visuel :<br>
• altère la vision des couleurs,<br>
• réduit le champ visuel,<br>
• diminue l'acuité de façon importante.<br>
Sans oublier l'influence de la fatigue.<br>
Précautions à prendre :<br>
Avant le départ :<br>
• contrôler le bon état, la propreté, le réglage, le bon fonctionnement des feux ;<br>
• contrôler la charge de la batterie ;<br>
• s'assurer qu'on a une boîte d'ampoules de rechange, des fusibles, une lampe<br>
de poche.<br>
Pendant le trajet :<br>
• faire des pauses plus fréquentes ;<br>
• adapter son allure aux conditions météo, à la visibilité et aux conditions<br>
d&#039adhérence ;<br>
• de nuit, ralentir davantage en virage car l&#039importance de la courbe est plus<br>
difficile à apprécier et la perception des obstacles plus tardive ;<br>
• de nuit, en cas d'éblouissement, fixer le bord droit de la route le plus loin<br>
possible ;<br>
• en cas de mauvaise visibilité, se guider à l&#039aide des marquages au sol ;<br>
• se méfier du "coup de pompe" au petit matin.<br>
Informations routières :<br>
Internet, CRIR, CNIR, Police, Gendarmerie, Autoroute info, Radios, etc... 24 h/24 h.`;
            break;
        case "Fiche n° 2":
            FO = `FICHE 2 Éléments de réponse<br>
Comportement en cas d&#039accident.<br>
En présence d&#039un accident corporel, lorsqu&#039on est arrivé le premier ou que l&#039on est<br>
témoin de l&#039accident, porter le gilet de haute visibilité et appliquer les gestes<br>
d&#039urgence dans l&#039attente des secours.<br>
Gestes d'urgence<br>
• PROTEGER<br>
• ALERTER<br>
• SECOURIR<br>
Protéger : Signaler l'accident aux autres usagers pour éviter un sur-accident<br>
(utilisation du ou des triangles de présignalisation, feux de détresse ...). De nuit<br>
essayer d'éclairer l'accident.<br>
Alerter : Police ou Gendarmerie, pompiers, borne d&#039appel sur l&#039autoroute, lorsqu'on<br>
arrive le premier le plus rapidement en précisant le lieu, la gravité apparente, le<br>
nombre de blessés ...<br>
Sinon passer avec prudence pour ne pas encombrer inutilement les lieux.<br>
Numéros utiles : SAMU (15), police ou gendarmerie (17), pompiers (18), 112 pour<br>
l&#039appel unique européen.<br>
Secourir : couvrir les blessés, leur parler mais ne pas intervenir sans compétences<br>
spécialisées.<br>
Gestes dangereux<br>
• Donner à boire à un blessé.<br>
• Effectuer des gestes non maîtrisés.<br>
• Déplacer un blessé, enlever son casque à un motard (sauf nécessité<br>
immédiate : incendie, noyade ...).<br>

Conduite à tenir<br>
En cas d&#039accident matériel, garder son calme et sa courtoisie quelle que soit la<br>
gravité de l&#039accident.<br>
Compte tenu de l&#039encombrement d&#039un véhicule lourd, dégager les lieux dès que<br>
possible. En cas d&#039impossibilité (véhicule hors service), protéger les lieux.<br>
Prévenir son entreprise et procéder à la rédaction d&#039un constat amiable. La détention<br>
et l&#039utilisation d&#039un constat amiable ne sont pas obligatoires mais elles sont fortement<br>
recommandées.<br>
Le constat amiable est de format européen et peut être utilisé dans tous les pays de<br>
l&#039Union. Les rubriques sont ainsi identiques, seules les langues des pays changent.<br>
La rédaction du recto se fait en présence de la partie adverse (identités et<br>
coordonnées des conducteurs, de leurs compagnies d&#039assurances, date, heure et<br>
lieu du sinistre, dégâts apparents, circonstances, croquis, etc.). Un total des croix est<br>
fait, les deux parties signent le constat avant de séparer les deux exemplaires<br>
(autocarbonnés). Il n&#039est alors plus possible de modifier le recto. Le verso est<br>
individuellement complété avant envoi à l&#039assureur (5 jours ouvrés en cas d&#039accident<br>
matériel).`;
            break;
        case "Fiche n° 3":
            FO = `FICHE 3 Éléments de réponse<br>
                Conduite en montagne ou zones accidentées.<br>
Dangers :<br>
Les risques de la conduite en montagne ou zones accidentées peuvent être liés à<br>
l&#039infrastructure routière, à la nature des véhicules / ensemble de véhicules, à la<br>
météorologie :<br>
• La déclivité : risques liés à l&#039énergie cinétique, augmentation de la vitesse qui<br>
peut en résulter ...<br>
• Les croisements : délicats selon l&#039infrastructure et le véhicule ou ensemble de<br>
véhicules concerné (largeur de la voie par exemple), les usagers croisés<br>
(surprise, méconnaissance des règles du code de la route …)<br>
• Les trajectoires en virages.<br>
• Les autres usagers (véhicules légers et lourds, véhicules spéciaux de<br>
déneigement ...).<br>
• Risque d&#039échauffement important des systèmes de freinage si mauvaise<br>
utilisation du ralentisseur, frein moteur, système de freinage ...<br>
• Surchauffe moteur lors des montées.<br>
• Risques liés à la neige, au brouillard ou au verglas.<br>
• Masse du véhicule importante, nature du chargement ...<br>
Précautions :<br>
La conduite d&#039un véhicule lourd requiert une attention toute particulière.<br>
• Réduire et adapter sa vitesse à la déclivité.<br>
• Adapter les rapports de boîte de vitesses en fonction de la déclivité (frein<br>
moteur), savoir utiliser les possibilités d&#039une transmission avec changement de<br>
vitesses automatique …<br>
• Utiliser correctement les freins et ralentisseurs, savoir utiliser les possibilités<br>
techniques de ralentisseurs / freins combinés ...<br>
• Posséder les dispositifs antidérapants adaptés (chaînes, pneus à crampons)<br>
selon la réglementation et les prévisions.<br>
• S&#039informer de l&#039état des routes, et de l&#039ouverture ou de la fermeture de certains<br>
itinéraires (cols ...).<br>
• Préférer, selon les possibilités, les tunnels routiers aux passages des cols.<br>
• Prévenir (avertisseur sonore, appels feux).`;
            break;
        case "Fiche n° 4":
            FO = `FICHE 4 Éléments de réponse<br>
                Gestes et postures &mdash; Accident du travail.<br>
Gestes et postures à adopter<br>
• Etre attentif lors de la montée et la descente de la cabine ou de l&#039autocar :<br>
risque de chute, foulure, entorse, fractures …<br>
• Véhicule avec cabine : ne pas sauter de la cabine, conserver les trois points<br>
d&#039appui, descendre face aux marchepieds, être attentif aux marchepieds<br>
glissants …<br>
• Autocar : ne pas sauter de marches en descendant, être attentif aux marches<br>
glissantes, être vigilant par rapport aux véhicules pouvant survenir de l&#039arrière<br>
lors de la descente côté conducteur …<br>
• Adopter les principes recommandés lors des chargements/déchargements de<br>
marchandises ou bagages (dos droit, placement des pieds de part et d&#039autre<br>
pour l&#039équilibre, flexion/extension des jambes …) ;<br>
• Etre vigilant lors du nettoyage du véhicule (utilisation des marchepieds et<br>
poignée pour le pare-brise, risque de glissade avec le sol mouillé sur les aires<br>
de lavage …) ;<br>
• Utiliser les équipements et protections prévues selon les cas (gants,<br>
chaussures de sécurité, imperméable …) ;<br>
• Adopter une bonne position de conduite (utilisation des différentes possibilités<br>
de réglage du siège, utilisation obligatoire de la ceinture de sécurité …) ;<br>
Importance des accidents<br>
• Les accidents du travail peuvent survenir à l&#039arrêt mais également en<br>
circulation :<br>
o L&#039accident du travail survient par le fait ou à l&#039occasion du travail, à<br>
toute personne salariée ou travaillant à quelque titre ou en quelque lieu<br>
que ce soient pour un ou plusieurs employeurs.<br>
o Un accident pendant le trajet aller ou retour entre la résidence et le lieu<br>
de travail d&#039un travailleur est considéré comme accident du travail si ce<br>
sinistre survient sur l&#039itinéraire et pendant le délai habituel du parcours ;<br>
o Quelques chiffres :<br>
Accident du travail (Assurance maladie 2010):<br>
• Transport routier de voyageurs : plus de 75 000 salariés,<br>
près de 2 900 accidents du travail, 3 décès ;<br>
• Transport routier de marchandises : plus de 229 000<br>
salariés, près de 18 000 accidents du travail, 45 décès ;<br>
Accident de la route (ONISR 2011) :<br>
• Transport routier de voyageurs : aucun conducteur tué,<br>
93 conducteurs blessés).<br>
• Transport routier de marchandises (véhicules + 3.5<br>
tonnes) : 60 conducteurs tués (30 jours), 609 conducteurs<br>
blessés.<br>
Dangers et risques<br>
• Accidents du travail : avoir à l&#039esprit qu&#039il y a 13 fois plus d&#039accident du travail à<br>
l&#039arrêt qu'en circulation. Exemple de l&#039accès en cabine : 10.000 accidents par<br>
an environ.<br>
• Connaître les risques liés :<br>
o aux manutentions (hernies, ankylose, écrasement… lors du<br>
chargement et déchargement, bâchages, débâchages) ;<br>
o aux matières transportées (brûlures, respiration de vapeurs toxiques<br>
lors du transport ou transvasement de liquides chauds, toxiques,<br>
dangereux ...) ;<br>
o à la conception des véhicules (chute, membre coincé, blessures… liés<br>
à une cabine trop haute, un accès difficile aux organes mécaniques,<br>
lors de l&#039utilisation du dispositifs d'attelage ...) ;<br>
o à la manœuvre des hayons élévateurs (chute, écrasement,<br>
blessure …) ;<br>
o à la conduite de groupes frigorifiques (produits suspendus),<br>
citernes (mouvement de ballant) ;<br>
o à la manœuvres des cabines basculantes (écrasement, membre<br>
coincé …) ;<br>
o A l&#039ouverture et à la fermeture des portes d&#039accès (risque de blesser un<br>
voyageur lors de l&#039ouverture / fermeture d&#039une porte, écrasement ou<br>
coincement de la main lors de la fermeture d&#039une porte ...).`;
            break;
        case "Fiche n° 5":
            FO = `FICHE 5 Éléments de réponse<br>
                Chargement &mdash; Surcharge<br>
Chargement<br>
Le chargement est de la responsabilité du conducteur (marchandises).<br>
Les voyageurs et leurs éventuelles marchandises sont sous la responsabilité du<br>
conducteur (voyageurs).<br>
• Précautions :<br>
o Respecter la réglementation relative aux masses maximales pour éviter<br>
la surcharge.<br>
o Equilibrer, répartir et éventuellement arrimer le chargement.<br>
o Transport de voyageurs : s&#039assurer de la répartition et de la bonne<br>
installation des voyageurs, veiller à ce qu&#039ils soient informés de<br>
l&#039obligation du port de la ceinture de sécurité.<br>
o Transport de marchandises : organiser correctement le chargement en<br>
fonction de l'itinéraire et, dans le cas de livraisons multiples, des<br>
déchargements successifs.<br>
o Adapter sa vitesse.<br>
o Choisir son itinéraire en fonction du gabarit (hauteur et largeur) et des<br>
masses (limitations de tonnage) de son véhicule ou ensemble de<br>
véhicules.<br>
• Risques liés à un chargement défectueux :<br>
o Déséquilibre du véhicule.<br>
o Risque de renversement.<br>
o Détérioration du véhicule.<br>
o Risque d&#039endommagement de la voirie, des ouvrages d&#039art …<br>
o Risque d'obstruction de la visibilité.<br>
o Risque de chute de la marchandise sur la chaussée.<br>
o Risque de limitation ou de refus de garantie de la part des assureurs en<br>
cas d'accident.<br>
Surcharge<br>
Respect de la réglementation : Surcharge interdite.<br>
La masse réelle ne doit jamais dépasser la masse en charge maximale admissible<br>
(PTAC ou PTRA selon qu&#039il s&#039agisse d&#039un véhicule isolé ou d&#039un ensemble de<br>
véhicules).<br>
Les masses sont inscrites sur :<br>
• les certificats d&#039immatriculation (code F2 pour le PTAC, F3 pour le PTRA) ;<br>
Et, selon le cas :<br>
• sur la plaque de tare et de surface ;<br>
• sur la plaque du constructeur ;<br>
• sur le dispositif d&#039attelage.<br>
La réalité du transport : cette réglementation n'est pas toujours respectée (nécessité<br>
de rendement, difficultés à contrôler certains chargements : vrac ...).<br>
Sanctions<br>
La surcharge constitue une infraction :<br>
• à la réglementation des transports (coordination).<br>
• au code de la route.<br>
Sanctions encourues :<br>
o amende (4ème classe, 90 € en forfaitaire minorée, 135 € en forfaitaire,<br>
375 € en forfaitaire majorée) ;<br>
o prison ;<br>
o immobilisation du véhicule (au-delà de 5 % de surcharge).`;
            break;
        case "Fiche n° 6":
            FO = `FICHE 6 Éléments de réponse<br>
                Le dépassement.<br>
Les dépassements avec un véhicule du groupe lourd ou d&#039un ensemble de véhicules<br>
nécessite une grande attention, conséquence de gabarits imposants (poids et<br>
dimensions) .<br>
Précautions avant le dépassement<br>
• Respect de la signalisation horizontale et verticale.<br>
• Respect de la réglementation (interdiction de dépassement sur la troisième<br>
voie pour les véhicules d&#039un poids total autorisé en charge supérieur à 3.5<br>
tonnes ou d&#039ensemble d&#039une longueur supérieure à 7 mètres, interdiction de<br>
dépassement lorsqu&#039au moins une voie de circulation est couverte de<br>
neige …).<br>
• Importance de l'espace libre nécessaire.<br>
• Importance de la différence d'allure avec le véhicule dépassé.<br>
• Accélérations rendues difficiles par l'inertie du véhicule.<br>
• Nécessité de connaître son véhicule (possibilité d&#039accélération, utilisation du<br>
limiteur/régulateur de vitesse ...).<br>
• Utiliser les avertisseurs (sonores et lumineux).<br>
Précautions pendant le dépassement<br>
• Respecter des distances latérales et longitudinales, existence de règles<br>
prévues par le code de la route (notamment avec les deux-roues ou les<br>
piétons) …<br>
• Surveillance à l&#039aide des dispositifs de rétrovision.<br>
Précautions après le dépassement<br>
• Respecter les distances lors du retour à droite (distances de sécurité [règle du<br>
code de la route spécifique - R.412-12 - imposant une distance minimale de<br>
50 mètres pour les PTAC > 3 500 kilos ou dont la longueur > 7 mètres]).<br>
• Se rabattre à droite.<br>
Dangers liés aux dépassements<br>
• Accrochage de l'usager dépassé à cause d&#039une mauvaise appréciation des<br>
distances.<br>
• Mauvaise appréciation des vitesses.<br>
• Déport dû au vent (passage d'une zone abritée à une zone non abritée).<br>
Etre dépassé<br>
• Maintenir son allure (ou éventuellement ralentir), rappel des règles du code de<br>
la route ...<br>
• Surveiller un déport éventuel dû au vent.<br>
Spécifique BE, C, CE, D1E et DE :<br>
Les dispositifs latéraux et arrière de protection.<br>
• Dispositifs latéraux :<br>
o Objectif : protéger contre le risque de chute d'usagers (deux roues<br>
principalement) sur la trajectoire des roues arrière du véhicule, de la<br>
remorque ou de l&#039ensemble de véhicules.<br>
• Dispositifs arrière anti-encastrement :<br>
o Objectif : protéger contre le risque d'encastrement sous le véhicule<br>
d'usagers venant de l'arrière. `;
            break;
        case "Fiche n° 7":
            FO = `FICHE 7 Éléments de réponse<br>
                Dynamique du véhicule.<br>
Vitesse<br>
• Un véhicule en mouvement accumule une énergie : c&#039est l'énergie cinétique.<br>
• C&#039est l&#039énergie qui animait le ou les véhicules juste avant le choc.<br>
• Après le choc, véhicule(s) immobilisé(s), l&#039énergie cinétique est tombée à<br>
zéro, car elle a été « consommée » en déformations mécaniques très<br>
brutales. Elle est proportionnelle :<br>
o la masse du véhicule,<br>
o au carré de la vitesse.<br>
• La vitesse à un impact direct sur la gravité des sinistres. Dans les accidents<br>
mortels impliquant au moins un poids lourd, près de 70 tués dans les poidslourd, plus de 500 tués dans les autres véhicules ou piétons (ONISR 2011).<br>
Centre de gravité<br>
• Il est déterminé par construction.<br>
• Il doit se situer le plus bas possible.<br>
• Il varie en fonction du chargement (un chargement en hauteur rehausse le<br>
centre de gravité).<br>
• Il peut influencer la conduite en créant des effets de ballant (différents type de<br>
ballants, élargissement des trajectoires, risque de renversement …).<br>
Force centrifuge<br>
• C'est la force qui, dans un virage ou un changement de direction, entraîne le<br>
véhicule vers l'extérieur de la courbe.<br>
• Elle varie : avec le carré de la vitesse, la masse du véhicule et le rayon de la<br>
courbe.<br>
• Elle tend à élargir la trajectoire du véhicule en virage ou lors de changement<br>
de direction, ce qui peut surprendre le conducteur.<br>
Adaptation de la conduite<br>
• Réduire la vitesse du véhicule en fonction du chargement et de la<br>
configuration de la route (rayon de la trajectoire).<br>
• Adopter une conduite souple.<br>
• Adapter la vitesse du véhicule aux circonstances rencontrées : (signalisation,<br>
situations de circulation, état de la route, conditions de visibilité,<br>
d'éclairage ...).<br>
• Connaître la réglementation spécifique des véhicules du groupe lourd en<br>
matière de limitations de vitesses, (en fonction des catégories, du type de<br>
voie, apposition de disques de limitation à l'arrière des véhicules lourds, des<br>
remorques …).<br>
• Savoir que les véhicules du groupe lourd (hors BE) sont prévus, à la<br>
construction, pour ne pas dépasser une certaine vitesse (limiteur, dispositif<br>
non réglable et non modifiable …).<br>
• Savoir charger son véhicule et sa remorque le cas échéant (répartition,<br>
équilibre, arrimage …). `;
            break;
        case "Fiche n° 8":
            FO = `FICHE 8 Éléments de réponse<br>
                Alcool, stupéfiants, médicaments.<br>
Alcool.<br>
Le taux d&#039alcool limite à ne pas atteindre est de 0,5 g d&#039alcool par litre de sang soit<br>
0,25 mg d&#039alcool par litre d&#039air expiré.<br>
Chaque verre (norme débit de boisson) consommé fait monter le taux d&#039alcool de<br>
0,20 g à 0,25 g en moyenne.<br>
Ce taux peut augmenter en fonction de l&#039état de santé, du degré de fatigue, du stress<br>
ou des caractéristiques physiques de la personne.<br>
Le taux d&#039alcool maximal est atteint :<br>
• ½ heure après absorption à jeun ;<br>
• 1 heure après absorption au cours d&#039un repas.<br>
L&#039alcoolémie baisse en moyenne de 0,10 g à 0,15 g d&#039alcool par litre de sang en 1<br>
heure.<br>
Café salé, cuillerée d&#039huile ... : aucun "truc" ne permet d&#039éliminer l&#039alcool plus<br>
rapidement.<br>
Effets<br>
L'alcool agit sur le cerveau et sur tout le système nerveux, ce qui provoque des<br>
conséquences graves pour le conducteur.<br>
Les conditions physiques sont amoindries :<br>
• champ visuel réduit, vision trouble, inattention, sommeil ;<br>
• perte de mémoire, perte des apprentissages , diminution des réflexes.<br>
Le comportement est modifié :<br>
• diminution de la peur et prise de risque exagérée ;<br>
• agressivité ;<br>
• euphorie.<br>
Sanctions<br>

Taux compris entre 0,5 (0,2 pour le transport en commun) et 0,8 g d&#039alcool par litre<br>
de sang:<br>
• amende de 135 euros et retrait de 6 points sur le permis de conduire.<br>
Taux égal ou supérieur à 0,8 g d&#039alcool par litre de sang (délit) :<br>
• retrait de 6 points sur le permis de conduire ;<br>
• amende pouvant aller jusqu&#039à 4 500 euros ;<br>
• immobilisation du véhicule ;<br>
• suspension (jusqu&#039à 3 ans) voire annulation du permis ;<br>
• peine de prison (jusqu&#039à 2 ans).<br>
Stupéfiants.<br>
Effets :<br>
• capacité à contrôler la trajectoire diminuée ;<br>
• temps de réaction allongé ;<br>
• déficit des mécanismes d&#039attention et de vigilance ;<br>
• fausse sensation de sécurité.<br>
L'usage seul du cannabis multiplie le risque moyen d'avoir un accident par 1,8.<br>
L'usage combiné du cannabis avec une forte dose d'alcool multiplie ce risque par 14.<br>
Sanctions :<br>
Dépistage positif :<br>
• retrait de 6 points sur le permis de conduire ;<br>
• amende pouvant aller jusqu&#039à 4 500 euros ;<br>
• immobilisation du véhicule ;<br>
• suspension (jusqu&#039à 3 ans) voire annulation du permis ;<br>
• peine de prison (jusqu&#039à 2 ans).<br>
Les sanctions sont aggravées lorsque cette infraction est couplée avec un taux<br>
d&#039alcool prohibé : les peines sont portées à 3 ans d&#039emprisonnement et 9 000 euros<br>
d&#039amende.<br>
Médicaments.<br>
Avant de conduire, il convient de lire attentivement les notices ou de demander<br>
conseil à son médecin.<br>
Certains médicaments sont incompatibles avec la consommation d&#039alcool et<br>
entraînent un sur-risque d&#039accident considérable.`;
            break;

        case "Fiche n° 9":
            FO = `FICHE 9 Éléments de réponse<br>
                Eco-conduite et conduite citoyenne.<br>
Eco-conduite<br>
Dans la prise de conscience générale d&#039un environnement dégradé (pollution, coût<br>
des carburants et du matériel …), l&#039éco-conduite trouve toute sa légitimité.<br>
L&#039éco-conduite, ou conduite économique, a pour objectif d&#039adopter des principes pour<br>
une utilisation efficace de l&#039énergie.<br>
Règles de bases :<br>
• changer les rapports à bas régime moteur pour les véhicules à boîte de<br>
vitesse manuelle, utiliser les différents programmes proposés pour les<br>
changements de vitesses automatique ;<br>
• utiliser le compte-tours et connaître les caractéristiques de sa motorisation<br>
(couple, puissance, régime moteur optimal …) ;<br>
• réguler sa vitesse (80 au lieu de 90 par exemple) ;<br>
• utiliser l&#039inertie du véhicule ;<br>
• utiliser un régime moteur le plus bas possible ;<br>
• anticiper le trafic et conduire avec souplesse ;<br>
• entretenir son véhicule.<br>
De même, lors des départs à froid, amener progressivement le véhicule à sa<br>
température optimale de fonctionnement en utilisant le ou les thermomètres à<br>
disposition (liquide de refroidissement, huile) et en évitant de laisser tourner le<br>
moteur à l&#039arrêt.<br>
Penser qu&#039outre le moteur en lui même, les organes comportant des huiles (pont,<br>
boite de vitesses …) ont également besoin de monter en température pour un bon<br>
fonctionnement.<br>
Conduite citoyenne<br>
Bruit<br>
Précautions :<br>
• maintenir en bon état le dispositif d'échappement silencieux ;<br>
• éviter en agglomération des accélérations intempestives ;<br>
• arrêter le moteur lorsqu'on stationne, être vigilant sur les lieux de<br>
stationnement avec un véhicule équipé d&#039un groupe frigorifique.<br>
Sanctions : amendes, immobilisation, mise en fourrière.<br>
Pollution<br>
Précautions : pas d&#039émission, pendant l'arrêt, de fumées nettement teintées ou<br>
opaques.<br>
Il est toutefois admis des émissions fugitives au moment des changements de<br>
régime du moteur.<br>
Sanctions : amende, immobilisation, mise en fourrière.<br>
Moyens de lutte :<br>
La pollution automobile représente un danger important pour la population et<br>
l'environnement.<br>
L&#039entrée en application des différentes directives européennes (normes euro) sur les<br>
émissions polluantes ont pour conséquence des progrès techniques constants de la<br>
part des constructeurs impliquant une diminution de la pollution atmosphérique<br>
(motorisations SCR [réduction catalytique sélective] / EGR [recyclage des gaz<br>
d&#039échappement], hybrides et électriques, carburants alternatifs …).<br>
Les formations initiales et continues obligatoires des conducteurs de véhicules du<br>
groupe lourd ainsi que les formations en entreprises ont également un impact sur les<br>
conduites à adopter.<br>
Les véhicules lourds sont soumis à des contrôles réglementaires réguliers (contrôles<br>
techniques spécifiques).<br>
Enfin, sur certains itinéraires, les entreprises peuvent prendre en compte les<br>
possibilités de transport combiné rail-route pour limiter les émissions polluantes. <br> `;
            break;
        case "Fiche n° 10":
            FO = `FICHE 10 Éléments de réponse<br>
                Porte-à-faux - Angles morts<br>
Porte-à-faux<br>
Connaissance du véhicule :<br>
Le porte-à-faux est la distance existant entre l'axe de la roue avant (ou arrière) et<br>
l'extrémité avant (ou arrière) du véhicule.<br>
Le conducteur doit connaître les caractéristiques de son véhicule, et notamment les<br>
porte-à-faux avant et arrière.<br>
Dans le cas d&#039une semi-remorque, le conducteur doit aussi prendre en compte le<br>
porte-à-faux existant entre l&#039axe de l&#039attelage et le tablier de la semi.<br>
Situations particulières :<br>
• Virages accentués<br>
• Changements de direction<br>
• Manœuvres<br>
• Passages étroits<br>
Dangers :<br>
Risque de renversement des piétons ou des deux roues, d'accrochage des véhicules<br>
ou des obstacles.<br>
Précautions :<br>
Observer vers l'arrière (ou l'avant) de façon à surveiller le balayage des porte-à-faux,<br>
notamment au dessus des trottoirs.<br>
Le regard vers l'arrière doit se porter à l'opposé de la direction que l'on veut<br>
emprunter.<br>
Importance primordiale des différents rétroviseurs.<br>
Importance des placements et des trajectoires lors des changements de direction ou<br>
des manœuvres.<br>
Angles morts<br>
Connaissance du véhicule :<br>
Les véhicules lourds ayant un gros gabarit, les angles morts sont importants.<br>
Les angles morts constituent des zones de non visibilité vers l'arrière et sur les côtés.<br>
Le conducteur doit tenir compte de ces particularités.<br>
Situations particulières :<br>
• Dépassements.<br>
• Rabattements.<br>
• Changements de direction.<br>
• Manœuvres ...<br>
Dangers :<br>
• Risques de collision à l'arrière ou sur les côtés.<br>
• Risques importants liés aux dépassements des deux-roues notamment lors<br>
des arrêts en circulation.<br>
• Risques accentués dans la conduite des véhicules articulés car les zones de<br>
non visibilité sont variables et changeantes.<br>
Précautions :<br>
En cas de non-visibilité, sur une aire non ouverte à la circulation, le conducteur doit<br>
descendre du véhicule et aller vérifier l'espace libre.<br>
En général, sur les aires de manœuvres et en circulation, il est prudent de se faire<br>
guider.<br>
Il existe différents dispositifs de rétrovision pour aider le conducteur selon les<br>
véhicules (rétroviseur grand angle, d&#039accostage, antéviseur, caméra de recul …).`;
            break;
        case "Fiche n° 11":
            FO = `FICHE 11 Éléments de réponse<br>
                Comportement en tunnels et aux passages à niveau<br>
Tunnels<br>
Avant de s&#039engager dans un tunnel, s&#039assurer de son ouverture et s&#039informer des<br>
interdictions éventuelles (internet, société gestionnaire du tunnel, panneau à<br>
message variable …). S&#039assurer que la quantité de carburant est suffisante (un<br>
tunnel comme celui du mont Blanc fait par exemple près de 12 kilomètres) pour<br>
franchir l&#039ouvrage.<br>
Conduire en sécurité dans un tunnel :<br>
• ne pas fumer durant la traversée, enlever les lunettes de soleil traditionnelles ;<br>
• suivre les informations qui sont données par les équipes sur place ;<br>
• rester toujours à l&#039écoute de l&#039autoradio (107.7 ou radios locales) pour les<br>
consignes de sécurité ;<br>
• respecter la réglementation en place :<br>
o les limites de gabarit (hauteur, largeur …), d&#039accès (produit<br>
inflammables, GPL …) ;<br>
o obligation d&#039allumer les feux (avant d&#039entrer dans le tunnel) ;<br>
o les limitations de vitesse ;<br>
o les distances de sécurité : il existe une interdistance obligatoire avec,<br>
généralement, des balisages lumineux bleus disposés à intervalles<br>
réguliers. Un certain nombre de ces balisages doivent séparer le<br>
véhicule de celui qui précède ;<br>
o les feux, barrière d&#039accès …<br>
En cas d&#039arrêt dans un tunnel :<br>
o respecter la distance minimale entre deux véhicules, ne pas tenter de faire<br>
demi-tour ;<br>
o lire les informations sur les panneaux à messages variables, écouter la radio,<br>
suivre les consignes.<br>

En cas d&#039urgence (panne, incident, etc) :<br>
o utiliser autant que possible les emplacements d&#039arrêt prévus, à droite, situés à<br>
des intervalles réguliers ; sinon, arrêter le véhicule au plus près du trottoir ;<br>
o couper le moteur et allumer les feux de détresse ;<br>
o si possible, avertir le poste de contrôle et de commande à partir des niches de<br>
sécurité (SOS).<br>
En cas d&#039incendie :<br>
o dès détection de fumées ou de flammes, s&#039arrêter immédiatement. Ne pas<br>
tenter de faire demi-tour ou marche arrière ;<br>
o couper le moteur en laissant la clé de contact en place et allumer les feux de<br>
détresse ;<br>
o regagner rapidement un abri vert signalé par des lampes clignotantes ;<br>
o penser à aider ceux qui auraient des difficultés ;<br>
o si possible, avertir le poste de contrôle et de commande à partir des niches de<br>
sécurité ;<br>
o si possible, utiliser les extincteurs ou les lances qui se trouvent à l&#039intérieur<br>
des niches de sécurité elles-mêmes.<br>
Passages à niveau<br>
Différents types :<br>
• passage à niveau sans barrière : malgré sa rareté, il provoque un taux<br>
d'accident très élevé si on le calcule en fonction du nombre de véhicules<br>
passant en moyenne chaque jour ;<br>
• le passage à niveau avec une barrière complète ou deux demi-barrières de<br>
chaque côté de la voie ;<br>
• le passage à niveau avec une demi-barrière : forme la plus répandue.<br>
Données statistiques :<br>
• En France, plus de 18 000 passages à niveau ;<br>
• Pratiquement tous les accidents qui surviennent lors d'un franchissement de<br>
passage à niveau sont dus au non respect du code de la route ;<br>
• 12 décès lors du franchissement des passages à niveau (ONISR 2011).<br>
Précautions :<br>
Le gabarit des véhicules lourds impose de prendre beaucoup de précautions pour<br>
franchir les passages à niveau : inertie liée aux masses, longueur, hauteur, largeur,<br>
garde au sol avec certains types de remorques ...<br>
L'adaptation de la vitesse de franchissement est délicate : si le conducteur circule<br>
vite, il n'est pas sûr de pouvoir s'arrêter à temps en cas d'abaissement des barrières.<br>
A l'inverse, si son allure est faible, les barrières risquent de s'abaisser pendant le<br>
franchissement (dans ce cas, le conducteur ne doit en aucun cas s&#039arrêter quitte à<br>
casser les barrières).<br>
Le conducteur, avant de s'engager, doit s'assurer qu'il dispose d'un espace suffisant<br>
pour dégager entièrement le passage à niveau.  `;
            break;
        case "Fiche n° 12":
            FO = `FICHE 12 Éléments de réponse<br>
                Systèmes de sécurité et d&#039aides à la conduite<br>
Définition :<br>
Une aide à la conduite est un système de sécurité active d'information ou<br>
d'assistance du conducteur pour :<br>
• éviter l'apparition d'une situation dangereuse risquant d'aboutir à l'accident ;<br>
• libérer le conducteur d'un certain nombre de tâches qui pourraient atténuer sa<br>
vigilance ;<br>
• assister le conducteur dans sa perception de l&#039environnement (détecteur de<br>
dépassement, détecteur de risque de gel ...).<br>
Tout système allégeant et facilitant la tâche du conducteur peut être considéré<br>
comme une aide à la conduite.<br>
Cela va donc des systèmes les plus simples et répandus (direction assistée par<br>
exemple) aux plus complexes (radar de maintient des distances par exemple).<br>
Quelques exemples, leurs rôles :<br>
• Aide de sécurité :<br>
o ABR, antiblocage des roues en cas de freinage brusque / appuyé : le<br>
conducteur peut conserver sa trajectoire ;<br>
o ESP, stabilisateur électronique programmable : aide au contrôle de<br>
trajectoire ;<br>
o AFU, aide au freinage d&#039urgence : permet d&#039utiliser la puissance<br>
maximale du système de freinage ;<br>
o limiteur de vitesse ;<br>
o radar de distance : permet de conserver automatiquement une distance<br>
entre son véhicule et celui qui vous précède<br>
• Aide à la navigation par GPS avec avertisseur de zone de travaux,<br>
d&#039embouteillage … ;<br>
• Détecteur de fatigue, d'inattention :<br>
o Avertisseur de déviation de trajectoire ;<br>
o Alerte de franchissement involontaire de ligne.<br>
• Automatisation des tâches :<br>
o Allumage automatique des feux de croisement ;<br>
o Essuie-vitre automatique couplé à un capteur d'eau de pluie ;<br>
o Régulateur de vitesse<br>
• Aide au démarrage en côte, sur sol glissant (antipatinage) ;<br>
• Aide au stationnement :<br>
o Radar de détection de distance avant et arrière ;<br>
o Caméra de recul<br>
• Frein de stationnement électrique ;<br>
Dangers :<br>
Si ces systèmes apportent une efficacité à la conduite normale, ils peuvent aussi être<br>
source de risques et contraires à la sécurité si :<br>
• le conducteur se repose intégralement sur ces aides : baisse de vigilance,<br>
perte des repères, absence d&#039anticipation, endormissent…<br>
• pour certains appareils, l'interface utilisateur (vocale et/ou visuelle) est mal<br>
conçue et sollicite trop l'attention du conducteur qui à tendance à occulter ce<br>
qu&#039il se passe réellement sur la route ;<br>
• le conducteur procède aux divers réglages en roulant (entrée de données sur<br>
l&#039aide à la navigation par exemple) ;<br>
• en cas de défaillance, risque de se laisser surprendre …<br>
• tentation d'augmenter sa prise de risques au volant, repousser ses limites …  `;
            break;

    }
    // Affichage du thème gagnant dans un élément HTML
    document.getElementById("theme-gagnant").innerHTML = themeGagnantFO;
    document.getElementById("FO").innerHTML = FO;
}
function calculerNote() {
    let note = 0;
    if (document.getElementById("FEE").checked) {
        note = "GAME OVER";
    }
    if (document.getElementById("FE0").checked) {
        note = 0;
    }
    if (document.getElementById("FE1").checked) {
        note = 1;
    }
    if (document.getElementById("FE2").checked) {
        note = 2;
    }
    if (document.getElementById("FE3").checked) {
        note = 3;
    }

    // Validation des étapes 1 à 3
    if (document.getElementById("etape1").checked && document.getElementById("etape2").checked && document.getElementById("etape3").checked) {
        note += 1;
    }

    // Ajout des points pour les étapes 4 à 9
    if (document.getElementById("etape4").checked) {
        note += 1;
    }
    if (document.getElementById("etape5").checked) {
        note += 1;
    }
    if (document.getElementById("etape6").checked) {
        note += 1;
    }
    if (document.getElementById("etape7").checked) {
        note += 1;
    }
    if (document.getElementById("etape8").checked) {
        note += 1;
    }
    if (document.getElementById("etape9").checked) {
        note += 1;
    }
    if (document.getElementById("etape10").checked && document.getElementById("etape11").checked) {
        note += 1;
    }
    if (document.getElementById("etape12").checked) {
        note += 0;
    }
    if (document.getElementById("etape13").checked) {
        note += 1;
    }
    if (document.getElementById("etape14").checked) {
        note += 1;
    }
    if (document.getElementById("etape15").checked) {
        note += 1;
    }
    if (document.getElementById("etape16").checked) {
        note += 1;
    }



    // Récupération de la note du thème
    let noteTheme = parseInt(document.querySelector('input[name="options"]:checked').value);
    note += noteTheme;

    // Récupération de la note de la fiche orale
    let noteFO = parseInt(document.querySelector('input[name="RFO"]:checked').value);
    if (noteFO === -1) {
        note = 0; // Si la note est "E", la note totale est 0
    } else {
        note += noteFO;
    }


    // Affichage de la note totale
    let noteTotaleDiv = document.getElementById("note-totale-valeur");
    noteTotaleDiv.textContent = "Note totale : " + note;
    if (note >= 17) {
        noteTotaleDiv.style.color = "green";
        noteTotaleDiv.style.fontWeight = "bold";
        noteTotaleDiv.style.fontSize = "24px";
    } else {
        noteTotaleDiv.style.color = "red";
        noteTotaleDiv.style.fontWeight = "bold";
        noteTotaleDiv.style.fontSize = "24px";
    }

};
// initialisation des variables
let startTime;
let elapsedTime = 0;
let timerInterval;
const timer = document.getElementById("timer");
const startButton = document.getElementById("start");
const stopButton = document.getElementById("stop");
const errorMessage = document.getElementById("error-message");

// fonction pour démarrer le chronomètre
function startTimer() {
    startTime = Date.now() - elapsedTime;
    timerInterval = setInterval(updateTimer, 1000);
    startButton.disabled = true;
    stopButton.disabled = false;
}

// fonction pour mettre à jour le chronomètre
function updateTimer() {
    const currentTime = Date.now();
    elapsedTime = currentTime - startTime;
    const minutes = Math.floor(elapsedTime / 60000);
    const seconds = Math.floor((elapsedTime % 60000) / 1000);
    timer.textContent = `${minutes.toString().padStart(2, "0")}:${seconds.toString().padStart(2, "0")}`;
    if (elapsedTime >= 300000) {
        stopTimer();
        errorMessage.style.display = "block";
    }
}

// fonction pour arrêter le chronomètre
function stopTimer() {
    clearInterval(timerInterval);
    startButton.disabled = false;
    stopButton.disabled = true;
}

// gestionnaires d'événements pour les boutons de démarrage et d'arrêt
startButton.addEventListener("click", startTimer);
stopButton.addEventListener("click", stopTimer);
const successButton = document.querySelector('.btn-outline-success');
const failureButton = document.querySelector('.btn-outline-danger');
const resultMessage = document.getElementById('result-message');

successButton.addEventListener('click', () => {
    resultMessage.textContent = 'Manoeuvre réussie';
});

failureButton.addEventListener('click', () => {
    resultMessage.textContent = 'Manoeuvre échouée';
});