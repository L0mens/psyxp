<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Lomens.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>



<div id="page-consigne-xp1" class="">
    <?php
    if(ISSET($_GET['code'])){
        include ("pages-consignes/mcss.php");
    }
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

</div>

<div id="page-question" class="hidden">
    <?php
    include ("questions.php");
    ?>
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