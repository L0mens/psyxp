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

    <p>Tu vas passer une évaluation de lecture silencieuse. Ce test est conçu pour être représentatif de ton niveau actuel en français.</p>
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

    <p>Le résultat de ce test est individuel et visible par les chercheurs. <br /><br />
        Autrement dit, seuls les chercheurs connaitront ta performance personnelle, pas même toi. Ainsi, ils compareront ta performance personnelle à celle des élèves de SEGPA.
    </p>
    <button id ="btn-suivant-mrpo-1-4" class="btn-suivant-consigne" onclick="switchConsigne('mrpo','1-5')">Suivant</button>
</div>

<div id="mrpo-1-5" class="consigne hidden">
    <h2>Consigne</h2>
    <p>Clique sur le plus de noms d’animaux possible dans la liste.<br /> Le mot changera alors de couleur.<br /> En cas d’erreur tu pourras décliquer.<br /> Attention !<br /> Tu dois utiliser le sens naturel de lecture (de gauche à droite, ligne par ligne).<br />Tu auras un temps limité dès que l’épreuve s’affichera.<br /> Pour être plus rapide, utilise les flèches directionnelles de ton clavier.
    </p>
    <button id ="btn-suivant-mrpo-1-5" class="btn-suivant-consigne" onclick="startFirstPreuve()">Démarrer</button>
</div>
