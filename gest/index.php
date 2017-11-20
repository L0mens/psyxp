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
            <th>SEGPA</th>
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
            <td><?php echo substr($data['id'],0,-4)?></td>
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

<form action="generate.php" method="post">
    <input type="submit" value="Générer">
</form>
<table id="table-result" class="tableau">
    <caption>Tableau des résultats</caption>
    <thead>
    <tr>
        <th>ID</th>
        <th>Animaux CL(A)</th>
        <th>Animaux NC(B)</th>
        <th>Non-Animaux CL(C)</th>
        <th>Score</th>
        <th>Q1</th>
        <th>Q2</th>
        <th>Q3</th>
        <th>Q4</th>
        <th>Q5</th>
        <th>Q6</th>
        <th>BPE</th>
        <th>BPA</th>
        <th>BPEN</th>
        <th>BPAM</th>
        <th>BPEM</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $req = $bdd->query("SELECT * FROM result");
     while($data = $req->fetch()){?>
        <tr>
            <td><?php echo substr($data['id_eleve'],0,-4)?></td>
            <td><?php echo $data['b_rep_cl']?></td>
            <td><?php echo $data['m_rep_nc']?></td>
            <td><?php echo $data['m_rep_cl']?></td>
            <td><?php echo $data['score']?></td>
            <td><?php echo $data['q_rep'][0]?></td>
            <td><?php echo $data['q_rep'][1]?></td>
            <td><?php echo $data['q_rep'][2]?></td>
            <td><?php echo $data['q_rep'][3]?></td>
            <td><?php echo $data['q_rep'][4]?></td>
            <td><?php echo $data['q_rep'][5]?></td>
            <td><?php echo $data['bpa']?></td>
            <td><?php echo $data['bpe']?></td>
            <td><?php echo $data['bpen']?></td>
            <td><?php echo $data['bpam']?></td>
            <td><?php echo $data['bpem']?></td>
        </tr>
    <?php } $req->closeCursor();?>
    </tbody>
</table>

<div>
    <a href="excel.php">EXCEL</a>
</div>
<script
    src="https://code.jquery.com/jquery-3.1.1.slim.js"
    integrity="sha256-5i/mQ300M779N2OVDrl16lbohwXNUdzL/R2aVUXyXWA="
    crossorigin="anonymous"></script>
<script src="../js/gest.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
