<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 05/03/2017
 * Time: 15:57
 */

?>


<div id="mcgs-1-1" class="consigne">
    <h2>Epreuve de lecture</h2>
    <span>1/2</span>
    <button id ="btn-suivant-mcgs-1-1" class="btn-suivant-consigne" onclick="switchConsigne('mcgs','1-2')">Suivant</button>
</div>


<div id="mcgs-1-2" class="consigne hidden">

    <p>Tu vas passer une évaluation de lecture silencieuse. Ce test mesure ton niveau en français.</p>
    <button id ="btn-suivant-mcgs-1-2" class="btn-suivant-consigne" onclick="switchConsigne('mcgs','1-3')">Suivant</button>
</div>

<div id="mcgs-1-3" class="consigne hidden">
    <form>
        <label>Es-tu en SEGPA ?</label>
        <input type="radio" name="segpa" value="true" checked>Oui <br>
        <input type="radio" name="segpa" value="false">Non<br>
    </form>

    <button id ="btn-suivant-mcgs-1-3" class="btn-suivant-consigne btn-check-segpa" onclick="switchConsigne('mcgs','1-4')">Suivant</button>
</div>

<div id="mcgs-1-4" class="consigne hidden">

    <p>Les résultats de ce test sont collectifs et anonymes. <br /><br />
        Autrement dit, toi seul connaitra le résultat collectif des élèves de SEGPA, même les chercheurs ne la connaitront pas.
        Ainsi, tu pourras comparer la performance collective des élèves de SEGPA à celle des élèves de classe générale.<br /><br />
        En revanche, personne ne connaitra ta performance personnelle (ni toi, ni les chercheurs) pourtant elle sera déterminante dans le résultat de ta classe. D'ailleurs, nous n'enregistrerons ni ton nom, ni ton prénom, mais uniquement que tu es en SEGPA.
    </p>
    <button id ="btn-suivant-mcgs-1-4" class="btn-suivant-consigne" onclick="switchConsigne('mcgs','1-5')">Suivant</button>
</div>

<div id="mcgs-1-5" class="consigne consigne-final hidden">
    <h2>Consigne</h2>
    <p>Clique sur le plus de noms d’animaux possible dans la liste.<br /> Le mot changera alors de couleur.<br /> En cas d’erreur tu pourras décliquer.<br /> Attention !<br /> Tu dois utiliser le sens naturel de lecture (de gauche à droite, ligne par ligne).<br />Tu auras un temps limité dès que l’épreuve s’affichera.<br /> Pour être plus rapide, utilise les flèches de ton clavier.<br><br />
    </p>
    <label><input type="checkbox" name="check-valid" id="xp1-consign-verif" value=""/> J'ai bien lu la consigne</label>
    <button id ="btn-suivant-mcgs-1-5" class="btn-suivant-consigne need-verif" disabled onclick="startFirstPreuve()">Démarrer</button>
</div>
