<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 06/03/2017
 * Time: 18:38
 */

?>


<div id="mrs-1-1" class="consigne">
    <h2>Test des animaux </h2>
    <span>1/2</span>
    <button id ="btn-suivant-mrs-1-1" class="btn-suivant-consigne" onclick="switchConsigne('mrs','1-2')">Suivant</button>
</div>


<div id="mrs-1-2" class="consigne hidden">

    <p>Tu vas faire une activité de repérage.</p>
    <button id ="btn-suivant-mrs-1-2" class="btn-suivant-consigne" onclick="switchConsigne('mrs','1-5')">Suivant</button>
</div>

<div id="mrs" class="hidden">
    <form>
        <label>En quelle classe es-tu ?</label>
        <input type="radio" name="segpa" value="true" checked>Segpa <br>
        <input type="radio" name="segpa" value="false">Classe générale <br>
    </form>
</div>

<div id="mrs-1-5" class="consigne hidden">
    <h2>Consigne</h2>
    <p>Clique sur le plus d’animaux possible dans la liste. La police changera alors de couleur. En cas d’erreur tu pourras décliquer.<br /><br />
        Attention !<br /><br />
        Tu dois utiliser le sens naturel de lecture (de gauche à droite, ligne par ligne).<br /><br />
        Tu auras un temps limité dès que l’épreuve s’affichera.<br /><br />
        Pour être plus rapide, utilise les flèches directionnelles de ton clavier.<br /><br />
    </p>
    <button id ="btn-suivant-mrs-1-5" class="btn-suivant-consigne" onclick="startFirstPreuve()">Démarrer</button>
</div>
