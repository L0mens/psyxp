<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 18/05/2017
 * Time: 23:20
 */

include("bdd.php");


$r_id;
$xp1 = array();
$xp2 = array();
$file = file('../files/chainet');
$soluce = $file[0];

$reqP = $bdd->query("SELECT * FROM passage");
dropInBD($bdd);
while($data = $reqP->fetch()){
    $r_id = $data['id'];
        /*echo $data['segpa'];
            echo $data['codexp'];
        echo $data['age'];
        echo $data['sexe'];
        echo $data['classe'];
        echo $data['dys'];
            echo $data['etablissement'];
            echo $data['postal'];
        */
        echo('ID : '. $r_id.'<br/>');
        $xp2 = quest_xp_analys($data['xp2']);
        echo("BMA ".$xp2[0]." BME ".$xp2[1]." BPA ".$xp2[2]." BPE " . $xp2[3].'<br/>');
        $xp1 = rat_xp_analys($data['xp1'], $soluce);
        var_dump($xp1);
        insertToBD($bdd,$r_id,$xp1,$xp2);
}
$reqP->closeCursor();

header('Location: index.php');


function rat_xp_analys($input, $solution){
    $out = array();
    $good = 0;
    $bad = 0;
    $i = 0;
    $rep = str_split($input);
    echo $input;
    foreach ($rep as $r){
        if(strcmp($r,$solution[$i]) == 0){
            $good++;
        }else{
            $bad++;
        }

        $i++;
    }
    $out["good"] = $good;
    $out["bad"] = $bad;
    $out["score"] = $good - $bad;
    $out["score_percent"] = 100 * $good / ($good +$bad) ;
    return $out;
}

function quest_xp_analys($input){
    $out2 = array();
    $chars = str_split($input);
    $i = 0;
    $somme = 0;

    foreach($chars as $char){

        if($i<3){
            $somme += intval($char);
            $i++;

        }
        else{
            array_push($out2,$somme);
            $i = 0;
            $somme =0;

            $somme += intval($char);
            $i++;
        }

    }
    array_push($out2,$somme);
    return $out2;
}

function insertToBD($bd,$id,$xp1,$xp2){
    $req = $bd->prepare('INSERT INTO result VALUES(:id, :b_rep, :m_rep, :score, :score_percent, :bma, :bme, :bpa, :bpe)');
    $req->execute(array(
        'id' => $id,
        'b_rep' => $xp1['good'],
        'm_rep' => $xp1['bad'],
        'score' => $xp1['score'],
        'score_percent' => $xp1['score_percent'],
        'bma' => $xp2[0],
        'bme' => $xp2[1],
        'bpa' => $xp2[2],
        'bpe' => $xp2[3]
    ));
}

function dropInBD($bd){
    $bd->query('TRUNCATE result');
}
?>