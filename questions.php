<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 03/02/2017
 * Time: 23:28
 */

?>

<div class="consigne-large">
    <p>Indique dans quelle mesure les buts ci-dessous sont vrais pour toi de 1 à 5 :<br/>
        1 : Pas du tout vrai pour moi<br/>
        5 : Extrêmement vrai pour moi<br/>
    </p>
    <p>
        Aptitude : Capacité naturelle qui rend possible certaines performances.<br/>
        Compétences : Capacité reconnue dans un domaine.<br/>
    </p>
</div>

<form class="questionnaire container-fluid ">
    <div class="row tete-row">
        <div class="col-sm-7 col-md-7 col-lg-7 desc">En français...</div>
        <div class="col-sm-1 col-md-1 col-lg-1 note">1</div>
        <div class="col-sm-1 col-md-1 col-lg-1 note">2</div>
        <div class="col-sm-1 col-md-1 col-lg-1 note">3</div>
        <div class="col-sm-1 col-md-1 col-lg-1 note">4</div>
        <div class="col-sm-1 col-md-1 col-lg-1 note">5</div>
    </div>
    <div>
    </div>
    <?php
    $listeQ = [];
    $questions=file('files/questions.txt');
    foreach($questions as $quest)
    {
        array_push($listeQ,$quest);
    }
    $i = 0;
    foreach($listeQ as $q){


    ?>
    <div class="row rep-choice rep-<?php echo($i);?>">
        <div class="col-sm-7 col-md-7 col-lg-7 desc"><span><?php echo($q);?> : </span></div>
        <div class="col-sm-1 col-md-1 col-lg-1 radio-button"><input type="radio" name="q<?php echo($i);?> " value="1"/></div>
        <div class="col-sm-1 col-md-1 col-lg-1 radio-button"><input type="radio" name="q<?php echo($i);?> " value="2"/></div>
        <div class="col-sm-1 col-md-1 col-lg-1 radio-button"><input type="radio" name="q<?php echo($i);?> " value="3"/></div>
        <div class="col-sm-1 col-md-1 col-lg-1 radio-button"><input type="radio" name="q<?php echo($i);?> " value="4"/></div>
        <div class="col-sm-1 col-md-1 col-lg-1 radio-button"><input type="radio" name="q<?php echo($i);?> " value="5"/></div>
    </div>
    <?php
        $i++;
    }
    ?>
    <button type="button" disabled class="valid-btn">Valider</button>
</form>


