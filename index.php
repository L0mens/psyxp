<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 15/02/2017
 * Time: 17:46
 */
?>

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


if(!ISSET($_GET['cs']) || strcmp($_GET['cs'],"y") !== 0){



    ?>
        <div id="page-avert" class="page">
            <p>
                Dans cette étude nous cherchons à comprendre les buts et les habilités des élèves de collège. Tu vas faire un court test puis répondre un questionnaire sur tes buts réels. Le temps de passation est d’environ 20 minutes.
            </p>
            <p>
                Si tu le désires, tu es libre d’arrêter de participer à tout moment. Les données et les résultats te concernant sont confidentiels. Seule l’équipe des chercheurs, désignée par le directeur de recherche, est autorisée à les analyser.
            </p>
            <form action="index.php" method="get">
                <input type="hidden" name="cs" value="y" />
                <input class="submit-button" type="submit" name="sub" value="J'accèpte" />
            </form>
        </div>
<?php }

else {
    ?>

    <div id="page-intro" class="page">

        <form id="form-code-group" class="form-container" action="test.php" method="get">
            <div class="form-title">Code d'accès</div>
            <input class="form-field" type="text" name="code" /><br />
            <div id="message_avertissement_javascript">
                <p>Attention, si ce message ne disparaît pas, Javascript est désactivé sur votre navigateur, le site ne fonctionnera pas.</p>
            </div>
            <div class="submit-container">
                <input id="submit-group" class="submit-button" type="submit" value="Valider" disabled />
            </div>
        </form>
    </div>
    <?php
}?>

<script
    src="https://code.jquery.com/jquery-3.1.1.slim.js"
    integrity="sha256-5i/mQ300M779N2OVDrl16lbohwXNUdzL/R2aVUXyXWA="
    crossorigin="anonymous"></script>
<script src="js/function.js"></script>
<script src="js/transition.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>