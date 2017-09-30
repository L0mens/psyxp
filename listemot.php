<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 03/02/2017
 * Time: 23:29
 */
?>
<div class="consigne-mini">
    <p>
        <h2>Rappel de la consigne</h2>
    <?php
        if($codeMin == "mrs" || $codeMin == "mro")
            echo("Clique sur le plus d’animaux possible dans la liste. L'élément changera alors de couleur, en cas d’erreur tu pourras décliquer. <br /> Réponds ligne par ligne.");
        else
            echo ("Clique sur le plus de noms d’animaux possible dans la liste. Le mot changera alors de couleur, en cas d’erreur tu pourras décliquer. <br />Réponds ligne par ligne.");
    ?>
    </p>
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
</div>