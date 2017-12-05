<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 06/03/2017
 * Time: 18:25
 */

?>


<div id="mrpo-1-1" class="consigne">
    <h2>Epreuve de lecture</h2>
    <span>1/2</span>
    <button id ="btn-suivant-mrpo-1-1" class="btn-suivant-consigne" onclick="switchConsigne('mrpo','1-2')">Suivant</button>
</div>


<div id="mrpo-1-2" class="consigne hidden">

    <p>Tu vas passer une évaluation de lecture silencieuse. Ce test mesure ton niveau en français.</p>
    <button id ="btn-suivant-mrpo-1-2" class="btn-suivant-consigne" onclick="switchConsigne('mrpo','1-3')">Suivant</button>
</div>

<div id="mrpo-1-3" class="consigne hidden">
    <form>
        <label>En quelle classe es-tu ?</label>
        <input type="radio" name="segpa" value="true" checked>SEGPA <br>
        <input type="radio" name="segpa" value="false">Classe générale <br>
    </form>

    <button id ="btn-suivant-mrpo-1-3" class="btn-suivant-consigne btn-check-segpa" onclick="switchConsigne('mrpo','1-4')">Suivant</button>
</div>

<div id="mrpo-1-4" class="consigne hidden">

    <p>Les résultats de ce test sont individuels et seront connus des chercheurs. <br /><br />
        Autrement dit, seuls les chercheurs connaitront ta performance personnelle, pas même toi. Ainsi, ils compareront ta performance personnelle à celle des élèves de SEGPA.
    </p>
    <button id ="btn-suivant-mrpo-1-4" class="btn-suivant-consigne" onclick="switchConsigne('mrpo','1-5')">Suivant</button>
</div>

<div id="mrpo-1-5" class="consigne consigne-final hidden">
    <h2>Consigne</h2>
    <p>Clique sur le plus de noms d’animaux possible dans la liste.<br /> Le mot changera alors de couleur.<br /> En cas d’erreur tu pourras décliquer.<br /> Attention !<br /> Tu dois utiliser le sens naturel de lecture (de gauche à droite, ligne par ligne).<br />Tu auras un temps limité dès que l’épreuve s’affichera.<br /> Pour être plus rapide, utilise les flèches de ton clavier.
    </p>
    <label><input type="checkbox" name="check-valid" id="xp1-consign-verif" value=""/> J'ai bien lu la consigne</label>
    <button id ="btn-suivant-mrpo-1-5" class="btn-suivant-consigne need-verif" disabled onclick="startFirstPreuve()">Démarrer</button>
</div>
