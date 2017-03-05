<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Lomens.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php
    $listCode = array("mcss");
    if(ISSET($_GET['code'])) {
        $codeMin = strtolower($_GET['code']);
    }
    else {
        echo("ERREUR CODE");
        $codeMin="ERROR";
    }
?>


<div id="page-consigne-xp1" class="">
    <?php
        if(in_array($codeMin, $listCode))
            include ("pages-consignes/".$codeMin.".php");
        else
            echo("ERREUR CODE");

    ?>
</div>

<div id="page-liste-mot" class="hidden">
    <?php
        include ("listemot.php");
    ?>
</div>

<div id="page-consigne-xp2" class="hidden">
    <div id="valid-xp1" class="consigne-mini">
        <p>Temps écoulé</p>
        <button id ="btn-start-seconde-xp" class="btn-suivant-consigne" onclick="startSecondConsigne()">Suivant</button>
    </div>
    <?php
    if(in_array($codeMin, $listCode))
        include ("pages-consignes/".$codeMin."2.php");
    else
        echo("ERREUR CODE");
    ?>
</div>

<div id="page-question" class="hidden">
    <?php
    include ("questions.php");
    ?>
</div>

<div id="page-contact" class="">
    <div class="consigne-form">
        <p>Voila c'est enregistré ! Il ne manque plus que quelques informations.</p>
        <div id="info-form">
            <div>
                <label>Identifiant : </label>
                <input type="text" id="input-id" name="id"/>
                <div>2 premières lettre de ton Prénom et Nom + jjmmaaaa de naissance.<br>
                        Ex : Jade Dupond née le 9 mars 2002 : JADU09032002 <br></div>
            </div>
            <div>
                <label>Age : </label>
                <input type="text" id="input-age" name="age"/>
            </div>
            <div>
                <label>Sexe : </label>
                <input type="radio" name="sexe" value="F" checked/>F<input type="radio" name="sexe" value="G"/>G
            </div>
            <div>
            <label>Niveau : </label>
                <input type="radio" name="classe" value="6" checked/>6ème
                <input type="radio" name="classe" value="5"/>5ème
                <input type="radio" name="classe" value="4"/>4ème
                <input type="radio" name="classe" value="3"/>3ème
            </div>
            <div>
                <label>Dyslexie : </label>
                <input type="radio" name="dyslexie" value="Y" checked/>Oui<input type="radio" name="dyslexie" value="N" />Non
            </div>
            <div>
                <label>Etablissement : </label>
                <input type="text" id="input-etab" name="etab"/>
            </div>
            <div>
                <label>Code Postal : </label>
                <input type="text" id="input-postal" name="postal"/>
            </div>

        </div>
        <div>
            <input type="button" value="Valider" id="valid-btn-info-form" disabled>
        </div>
    </div>
</div>

<div id="page-fin" class="hidden">
    <div class="consigne">
        <p id="valid-text-final">Chargement....</p>
        <a href="index.php">Retour a l'accueil</a>
    </div>

</div>

<script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
<script src="js/function.js"></script>
<script src="js/transition.js"></script>
<script src="js/formverif.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>