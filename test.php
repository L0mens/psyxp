<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>étudeM1Lille3</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<?php
    $listCode = array("mcss", "mcso", "mcgo", "mcgs", "mrps", "mrgo", "mrpo", "mrgs", "mrs", "mro");
    if(ISSET($_GET['code'])) {
        $codeMin = strtolower($_GET['code']);
    }
    else {
        echo("<div class='consigne'><h2>Pas de code</h2><p><a href='index.php'>Retour</a></p></div>");
        $codeMin="ERROR";
    }
?>


<div id="page-consigne-xp1" class="">
    <?php
        if(in_array($codeMin, $listCode))
            include ("pages-consignes/".$codeMin.".php");
        else
            echo("<div class='consigne'><h2>ERREUR CODE</h2><p><a href='index.php'>Retour</a></p></div>");

    ?>
</div>

<div id="page-liste-mot" class="hidden">
    <?php
        include ("listemot.php");
    ?>
</div>

<div id="page-consigne-xp2" class="hidden">
    <div id="valid-xp1" class="consigne-mini">
        <?php
        if($codeMin == "mrs" || $codeMin == "mro")
            echo("<p>Temps du jeu écoulé</p>");
        else
            echo ("<p>Temps écoulé</p>");
        ?>

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

<div id="page-contact" class="hidden">
    <div class="consigne-form">
        <p>Tes réponses ont bien été enregistrées. Merci de bien vouloir remplir ce formulaire.</p>
        <div id="info-form">
            <div>
                <label>Identifiant : </label>
                <input type="text" id="input-id" name="id" size="12"/>
                <div>2 premières lettres de ton Prénom et Nom, en majuscule + jjmmaaaa de naissance.<br>
                        Ex : Jade Dupond née le 9 mars 2002 : JADU09032002 <br></div>
            </div>
            <div>
                <label>Age : </label>
                <input type="text" id="input-age" name="age" size="2"/>
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
                <input type="radio" name="dyslexie" value="N" checked/>Non<input type="radio" name="dyslexie" value="Y" />Oui
            </div>
            <div>
                <label>Etablissement : </label>
                <input type="text" id="input-etab" name="etab" size="39"/>
            </div>
            <div>
                <label>Code Postal : </label>
                <input type="text" id="input-postal" name="postal" size="5"/>
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
        <p id="debrief-text">Tu viens de participer à une expérience de psychologie sur les stéréotypes et les buts d’accomplissements. Une explication orale te sera donnée sur les objectifs de cette étude. Nous te remercions de ta participation.
        </p>
        <a href="index.php">Retour à l'accueil</a>
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