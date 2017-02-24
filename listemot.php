<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 03/02/2017
 * Time: 23:29
 */
?>
<div class="consigne-mini">Clique sur le plus de noms d’animaux possible dans la liste.
</div>
<?php

    $listeMot = [];
    $names=file('files/listemots.txt');
    // To check the number of lines

    foreach($names as $name)
    {
        $ar = explode( ';', $name );
        $listeMot = array_merge($listeMot,$ar);
    }

$motParLigne = 6 ;
$i = 0;
$ligne = 0;
echo(" <div class=\"ligne\">");
foreach ($listeMot as &$mot) {
    if($i == $motParLigne){
        $i = 0;
        $ligne++;
        echo("</div>");
        echo(" <div class=\"ligne\">");
    }

    $div ="<div id=\"". $ligne."-".$i."\" class=\"case-mot\">";
    //$pmot = "<p>".$mot."</p>";
    $separateur = "<span class=\"separateur\"> - </span>";
    $fdiv = "</div>";
    echo $div . $mot  . $fdiv . $separateur ;
    $i++;


}
?>


<!--
    <div class="row">
        <div id="0-0" class="col-sm-1 col-md-1 col-lg-1">
            <span>MOT</span>
        </div>
        <div id="0-1" class="col-sm-1 col-md-1 col-lg-1 ">
            <p>Lorem ipsum...</p>
        </div>
        <div id="0-2" class="col-sm-1 col-md-1 col-lg-1 ">
            <p>Lorem ipsum...</p>
        </div>
        <div id="0-3" class="col-sm-1 col-md-1 col-lg-1 ">
            <p>Lorem ipsum...</p>
        </div>
        <div id="0-4" class="col-sm-1 col-md-1 col-lg-1 ">
            <p>Lorem ipsum...</p>
        </div>
        <div id="0-5" class="col-sm-1 col-md-1 col-lg-1 ">
            <p>Lorem ipsum...</p>
        </div>
        <div id="0-6" class="col-sm-1 col-md-1 col-lg-1 ">
            <p>Lorem ipsum...</p>
        </div>
        <div id="0-7" class="col-sm-1 col-md-1 col-lg-1 ">
            <p>Lorem ipsum...</p>
        </div>
        <div id="0-8" class="col-sm-1 col-md-1 col-lg-1 ">
            <p>Lorem ipsum...</p>
        </div>
        <div id="0-9" class="col-sm-1 col-md-1 col-lg-1 ">
            <p>Lorem ipsum...</p>
        </div>
        <div id="0-10" class="col-sm-1 col-md-1 col-lg-1 ">
            <p>Lorem ipsum...</p>
        </div>
        <div id="0-11" class="col-sm-1 col-md-1 col-lg-1 ">
            <p>Lorem ipsum...</p>
        </div>
    </div>
</div>
-->
</div>
<button id="calcul">ID CLICK</button>