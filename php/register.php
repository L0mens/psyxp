<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 02/03/2017
 * Time: 13:54
 */

$debug=FALSE;
$nowamp =FALSE;

try{
    if($nowamp){
        /* BDD M$ AZURE*/
        $bdd = new PDO('mysql:host=eu-cdbr-azure-west-c.cloudapp.net;dbname=LmSBD;charset=utf8', 'b4276ec7494d84', '1303b9ec',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    }else{
        $bdd = new PDO('mysql:host=localhost;dbname=psyxp;charset=utf8', 'root', '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }



}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


$idOK = FALSE;
$nomOK = FALSE;
$prenomOK = FALSE;
$naissanceOK = false;
$ageOK = FALSE;
$codeXPOK = FALSE;
$sexeOK = FALSE;
$postalOK = FALSE;
$etabOK = FALSE;
$classeOK = FALSE;
$dysOK = FALSE;
$xp1OK = FALSE;
$xp2OK = FALSE;
$goodID = "";
$goodEtab = "Autre";

if(isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['naissance'])){
    $r1 = rand(0,9);
    $r2 = rand(0,9);
    $r3 = rand(0,9);
    $r4 = rand(0,9);
    $p = strtoupper(substr($_GET['prenom'], 0 , 2));
    $n = strtoupper(substr($_GET['nom'], 0 , 2));
    $dn = str_replace("/","", $_GET['naissance']) ;
    $goodID = $p . $n . $dn .$r1.$r2.$r3.$r4;
    $idOK = TRUE;

    $date = DateTime::createFromFormat("d/m/Y", $_GET['naissance']);
    $now = new DateTime("now");
    $annee = date_diff($date , $now )->format("%Y");
    $ageOK = TRUE;
    if($debug){
        $foo = ($idOK) ? 'true' : 'false';
        echo "IDOK : ". $foo . "\n";
    }

}


if(isset($_GET['codeXP'])){
    if(strlen($_GET['codeXP']) == 4 || strlen($_GET['codeXP']) == 3)
        $codeXPOK = true;
}

if(isset($_GET['sexe'])){
    if($_GET['sexe'] == "G" || $_GET['sexe'] == "F")
        $sexeOK = true;
}
if(isset($_GET['dys'])){
    if($_GET['dys'] == "Y" || $_GET['dys'] == "N")
        $dysOK = true;
}

if(isset($_GET['classe'])){
    if($_GET['classe'] == "6" || $_GET['classe'] == "5" || $_GET['classe'] == "4" || $_GET['classe'] == "3")
        $classeOK = true;
}

if(isset($_GET['etabl'])){
    $etabOK = true;
    $goodEtab = htmlspecialchars($_GET['etabl']);
}

if(isset($_GET['codeP'])){
    if(ctype_digit($_GET['codeP']))
        $postalOK = true;
    if($debug) {
        $foo = ($postalOK) ? 'true' : 'false';
        echo "POSTAL : " . $foo . "\n";
    }
}

if(isset($_GET['xp1'])){
    $xp1OK = true;
    for($i = 0 ; $i < strlen($_GET['xp1']); $i++){
        $v = intval($_GET['xp1'][$i]);
        if($v =! 1 && $v =! 0)
            $xp1OK = false;
    }
    if($debug) {
        $foo = ($xp1OK) ? 'true' : 'false';
        echo "XP1 : " . $foo . "\n";
    }
}

if(isset($_GET['xp2'])){
    $xp2OK = true;
    if($debug) {
        $foo = ($xp2OK) ? 'true' : 'false';
        echo "XP2 : " . $foo . "\n";
    }
}



if($idOK && $ageOK && $dysOK && $classeOK && $codeXPOK && $etabOK && $postalOK && $sexeOK){
    if($xp1OK && $xp2OK){
        $req = $bdd->prepare('INSERT INTO passage VALUES(:id, :segpa, :codexp, :age, :sexe, :classe, :dys, :etabli, :postal, :xp1, :xp2)');
        $req->execute(array(
            'id' => $goodID,
            'segpa' => $_GET['segpa'],
            'codexp' => $_GET['codeXP'],
            'age' => $annee,
            'sexe' => $_GET['sexe'],
            'classe' => $_GET['classe'],
            'dys' => $_GET['dys'],
            'etabli' => $goodEtab,
            'postal' => $_GET['codeP'],
            'xp1' =>$_GET['xp1'],
            'xp2' => $_GET['xp2']
        ));
        echo "Tout est validé, \n \n nous te remercions de ta participation.";

        if($debug) {
            $reponse = $bdd->query('SELECT * FROM passage');

            // On affiche chaque entrée une à une
            while ($donnees = $reponse->fetch()) {
                echo "ID : " . $donnees['id'] . " XP 1 : " . $donnees['xp1'] . " XP2 : " . $donnees['xp2'] . " \n";
            }

            $reponse->closeCursor(); // Termine le traitement de la requête
        }
    }else{
        echo "Erreurs lors des expériences ! Les données n'ont pas été enregistré.";
    }
}
else{
    echo "Erreurs lors de la saisie du formulaire finale ! Les données n'ont pas été enregistré.";
}


?>