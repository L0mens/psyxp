<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 18/02/2017
 * Time: 17:53
 */

?>

<div id="mcss-1-1" class="consigne">
    <h2>Epreuve de lecture</h2>
    <span>1/2</span>
    <button id ="btn-suivant-mcss-1-1" class="btn-suivant-consigne" onclick="switchConsigne('mcss','1-2')">Suivant</button>
</div>


<div id="mcss-1-2" class="consigne hidden">

    <p>Tu vas passer une évaluation de lecture silencieuse.<br><br />
        Ce test est représentatif de ton niveau actuel en français.</p>
    <button id ="btn-suivant-mcss-1-2" class="btn-suivant-consigne" onclick="switchConsigne('mcss','1-3')">Suivant</button>
</div>

<div id="mcss-1-3" class="consigne hidden">
    <form>
        <label>En quelle classe es-tu ?</label>
        <input type="radio" name="segpa" value="true" checked>Segpa <br>
        <input type="radio" name="segpa" value="false">Non-Segpa <br>
    </form>

    <button id ="btn-suivant-mcss-1-3" class="btn-suivant-consigne btn-check-segpa" onclick="switchConsigne('mcss','1-4')">Suivant</button>
</div>

<div id="mcss-1-4" class="consigne hidden">

    <p>Tu connaitras ton résultat mais nous nous ne le connaitrons pas. <br><br />
        Et tu sauras si ta performance personnelle est différente de celle des élèves qui ne sont pas en SEGPA.</p>
    <button id ="btn-suivant-mcss-1-4" class="btn-suivant-consigne" onclick="switchConsigne('mcss','1-5')">Suivant</button>
</div>

<div id="mcss-1-5" class="consigne hidden">
    <h2>Consigne</h2>
    <p>Clique sur le plus de noms d’animaux possible dans la liste. <br><br />
        Attention tu auras un temps limité dès que l’épreuve s’affichera. <br><br />
        La police changera alors de couleur, en cas d’erreur tu pourras décliquer.
    </p>
    <button id ="btn-suivant-mcss-1-5" class="btn-suivant-consigne" onclick="startFirstPreuve()">Démarrer</button>
</div>

