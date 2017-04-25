<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 08/04/2017
 * Time: 14:37
 */

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>étudeM1Lille3</title>
    <link rel="stylesheet" href="../css/gest.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<?php
    include("bdd.php");

    $req = $bdd->query("SELECT * FROM passage");
?>

<table id="table-passage" class="tableau">
    <caption>Tableau des passages</caption>
    <thead>
        <tr>
            <th>ID</th>
            <th>Segpa</th>
            <th>Code XP</th>
            <th>Age</th>
            <th>Sexe</th>
            <th>Classe</th>
            <th>Dyslexie</th>
            <th>Etablissement</th>
            <th>Code Postal</th>
        </tr>
    </thead>
    <tbody>
    <?php while($data = $req->fetch()){?>
        <tr>
            <td><?php echo $data['id']?></td>
            <td><?php echo $data['segpa']?></td>
            <td><?php echo $data['codexp']?></td>
            <td><?php echo $data['age']?></td>
            <td><?php echo $data['sexe']?></td>
            <td><?php echo $data['classe']?></td>
            <td><?php echo $data['dys']?></td>
            <td><?php echo $data['etablissement']?></td>
            <td><?php echo $data['postal']?></td>
        </tr>
        <?php } $req->closeCursor();?>
    </tbody>
</table>

<button>Génerer</button>

<table id="table-result" class="tableau">
    <caption>Tableau des résultats</caption>
    <thead>
    <tr>
        <th>ID</th>
        <th>Good</th>
        <th>Bad</th>
        <th>Score</th>
        <th>BMA</th>
        <th>BME</th>
        <th>BPE</th>
        <th>BPA</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $req = $bdd->query("SELECT * FROM result");
     while($data = $req->fetch()){?>
        <tr>
            <td><?php echo $data['id_eleve']?></td>
            <td><?php echo $data['b_rep']?></td>
            <td><?php echo $data['m_rep']?></td>
            <td><?php echo $data['score']?></td>
            <td><?php echo $data['bma']?></td>
            <td><?php echo $data['bme']?></td>
            <td><?php echo $data['bpa']?></td>
            <td><?php echo $data['bpe']?></td>
        </tr>
    <?php } $req->closeCursor();?>
    </tbody>
</table>
<script
    src="https://code.jquery.com/jquery-3.1.1.slim.js"
    integrity="sha256-5i/mQ300M779N2OVDrl16lbohwXNUdzL/R2aVUXyXWA="
    crossorigin="anonymous"></script>
<script src="../js/gest.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
