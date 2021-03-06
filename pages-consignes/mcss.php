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

    <p>Tu vas passer une évaluation de lecture silencieuse. Ce test mesure ton niveau en français.</p>
    <button id ="btn-suivant-mcss-1-2" class="btn-suivant-consigne" onclick="switchConsigne('mcss','1-3')">Suivant</button>
</div>

<div id="mcss-1-3" class="consigne hidden">
    <form>
        <label>Es-tu en SEGPA ?</label>
        <input type="radio" name="segpa" value="true" checked>Oui <br>
        <input type="radio" name="segpa" value="false">Non<br>
    </form>

    <button id ="btn-suivant-mcss-1-3" class="btn-suivant-consigne btn-check-segpa" onclick="switchConsigne('mcss','1-4')">Suivant</button>
</div>

<div id="mcss-1-4" class="consigne hidden">

    <p>Les résultats de ce test sont individuels et anonymes.<br /><br />
        Autrement dit, toi seul connaitra ton résultat personnel, même les chercheurs ne le connaitront pas. Ainsi, tu pourras comparer ta performance personnelle à celle des élèves de classe générale.
    </p>
    <button id ="btn-suivant-mcss-1-4" class="btn-suivant-consigne" onclick="switchConsigne('mcss','1-5')">Suivant</button>
</div>

<div id="mcss-1-5" class="consigne consigne-final hidden">
    <h2>Consigne</h2>
    <p>Clique sur le plus de noms d’animaux possible dans la liste.<br /> Le mot changera alors de couleur.<br /> En cas d’erreur tu pourras décliquer.<br /> Attention !<br /> Tu dois utiliser le sens naturel de lecture (de gauche à droite, ligne par ligne).<br />Tu auras un temps limité dès que l’épreuve s’affichera.<br /> Pour être plus rapide, utilise les flèches de ton clavier.
    </p>
    <label><input type="checkbox" name="check-valid" id="xp1-consign-verif" value=""/> J'ai bien lu la consigne</label>
    <button id ="btn-suivant-mcss-1-5" class="btn-suivant-consigne need-verif" disabled onclick="startFirstPreuve()">Démarrer</button>
</div>

