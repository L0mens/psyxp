<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 03/02/2017
 * Time: 23:28
 */

?>

<form class="questionnaire container-fluid">
    <div class="row tete-row">
        <div class="col-sm-1 col-md-1 col-lg-4 desc"><span>Note</span></div>
        <div class="col-sm-1 col-md-1 col-lg-1 note">1</div>
        <div class="col-sm-1 col-md-1 col-lg-1 note">2</div>
        <div class="col-sm-1 col-md-1 col-lg-1 note">3</div>
        <div class="col-sm-1 col-md-1 col-lg-1 note">4</div>
        <div class="col-sm-1 col-md-1 col-lg-1 note">5</div>
    </div>
    <?php
    for($i=0;$i<10;$i++){


    ?>
    <div class="row">
        <div class="col-sm-1 col-md-1 col-lg-4 desc"><span>Ceci est la question <?php echo($i);?> : </span></div>
        <div class="col-sm-1 col-md-1 col-lg-1 radio-button"><input type="radio" name="q<?php echo($i);?> " value="1"></div>
        <div class="col-sm-1 col-md-1 col-lg-1 radio-button"><input type="radio" name="q<?php echo($i);?> " value="2"></div>
        <div class="col-sm-1 col-md-1 col-lg-1 radio-button"><input type="radio" name="q<?php echo($i);?> " value="3"></div>
        <div class="col-sm-1 col-md-1 col-lg-1 radio-button"><input type="radio" name="q<?php echo($i);?> " value="4"></div>
        <div class="col-sm-1 col-md-1 col-lg-1 radio-button"><input type="radio" name="q<?php echo($i);?> " value="5"></div>
    </div>
    <?php
    }
    ?>
</form>
