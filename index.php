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