<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 18/05/2017
 * Time: 23:20
 */

include("bdd.php");

if(!ISSET($is_required)) {


    $r_id;
    $xp1 = array();
    $xp2 = array();
    $file = file('../files/chainet');
    $soluce = $file[0];

    $reqP = $bdd->query("SELECT * FROM passage");
    dropInBD($bdd);
    while ($data = $reqP->fetch()) {
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
        echo('ID : ' . $r_id . '<br/>');
        $xp2 = quest_xp_analys($data['xp2']);
        echo(" BPA " . $xp2[0] . " BPE " . $xp2[1] . '<br/>');
        $xp1 = rat_xp_analys($data['xp1'], $soluce);
        var_dump($xp1);
        insertToBD($bdd, $r_id, $xp1, $xp2);
    }
    $reqP->closeCursor();

    header('Location: index.php');
}

function rat_xp_analys($input, $solution){
    $out = array();
    $good = 0;
    $bad_nc = 0;
    $bad_cl = 0;
    $i = 0;
    $rep = str_split($input);
    echo $input;
    foreach ($rep as $r){
        if(strcmp($r,$solution[$i]) == 0){
            $good++;
        }else{
            if($r == "0"){ //Si la réponse vaut 0, elle est non cliqué
                $bad_nc++;
            }else{ //Sinon elle est cliqué
                $bad_cl++;
            }
        }

        $i++;
    }
    $out["good"] = $good;
    $out["bad_nc"] = $bad_nc;
    $out["bad_cl"] = $bad_cl;
    $out["score"] = $good - ($bad_nc + $bad_cl);
    $out["score_percent"] = 100 * $good / ($good +($bad_nc + $bad_cl)) ;
    return $out;
}

function quest_xp_analys($input){
    $out2 = array();
    array_push($out2,$input); //Ajoute la liste des réponse à l'indice 0
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
    $req = $bd->prepare('INSERT INTO result VALUES(:id, :b_rep, :m_rep_nc, :m_rep_cl, :score, :score_percent, :q_rep , :bpa, :bpe)');
    $req->execute(array(
        'id' => $id,
        'b_rep' => $xp1['good'],
        'm_rep_nc' => $xp1['bad_nc'],
        'm_rep_cl' => $xp1['bad_cl'],
        'score' => $xp1['score'],
        'score_percent' => $xp1['score_percent'],
        'q_rep' => $xp2[0],
        'bpa' => $xp2[1],
        'bpe' => $xp2[2]
    ));
}

function dropInBD($bd){
    $bd->query('TRUNCATE result');
}
?>