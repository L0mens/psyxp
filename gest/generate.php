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
        $xp2 = quest_xp_analys($data['xp2']);
        $xp1 = rat_xp_analys($data['xp1'], $soluce);
        var_dump($xp1);
        insertToBD($bdd, $r_id, $xp1, $xp2);
    }
    $reqP->closeCursor();

    header('Location: index.php');
}

function rat_xp_analys($input, $solution){
    $out = array();
    $good_nc = 0;
    $good_cl = 0;
    $bad_nc = 0;
    $bad_cl = 0;
    $i = 0;
    $rep = str_split($input);
    echo $input;
    foreach ($rep as $r){
        if(strcmp($r,$solution[$i]) == 0){
            if($r == "0"){ //Si la réponse vaut 0, elle est non cliqué
                $good_nc++;
            }else{ //Sinon elle est cliqué
                $good_cl++;
            }
        }else{
            if($r == "0"){ //Si la réponse vaut 0, elle est non cliqué
                $bad_nc++;
            }else{ //Sinon elle est cliqué
                $bad_cl++;
            }
        }

        $i++;
    }
    $out["good_nc"] = $good_nc;
    $out["good_cl"] = $good_cl;
    $out["bad_nc"] = $bad_nc;
    $out["bad_cl"] = $bad_cl;
    $out["score"] = $good_cl - ($bad_nc + $bad_cl);
    return $out;
}

function quest_xp_analys($input){
    $out2 = array();
    $out2['rep'] = $input ; //Ajoute la liste des réponse à l'indice 0
    $chars = str_split($input);
    $i = 0;
    $somme = 0;

    //BPA  : 1 4 7
    //BPE  : 2 6 8
    //BPEN : 3 5 9
    var_dump($chars);
    $out2['bpa'] = intval($chars[0]) + intval($chars[3]) + intval($chars[6]) ;
    $out2['bpe'] = intval($chars[1]) + intval($chars[5]) + intval($chars[7]) ;
    $out2['bpen'] = intval($chars[2]) + intval($chars[4]) + intval($chars[8]) ;
    $out2['bpam'] = $out2['bpa']/3;
    $out2['bpem'] = ($out2['bpe']+$out2['bpen'])/6;
    /*
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
    */
    return $out2;
}

function insertToBD($bd,$id,$xp1,$xp2){
    $req = $bd->prepare('INSERT INTO result VALUES(:id, :b_rep_nc, :b_rep_cl, :m_rep_nc, :m_rep_cl, :score,  :q_rep , :bpa, :bpe, :bpen, :bpam, :bpem)');
    $req->execute(array(
        'id' => $id,
        'b_rep_nc' => $xp1['good_nc'],
        'b_rep_cl' => $xp1['good_cl'],
        'm_rep_nc' => $xp1['bad_nc'],
        'm_rep_cl' => $xp1['bad_cl'],
        'score' => $xp1['score'],
        'q_rep' => $xp2['rep'],
        'bpa' => $xp2['bpa'],
        'bpe' => $xp2['bpe'],
        'bpen' => $xp2['bpen'],
        'bpam' => $xp2['bpam'],
        'bpem' => $xp2['bpem']
    ));
}

function dropInBD($bd){
    $bd->query('TRUNCATE result');
}
?>