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

    <p>Tu vas passer une évaluation de lecture silencieuse. Ce test est conçu pour être représentatif de ton niveau actuel en français.</p>
    <button id ="btn-suivant-mcgs-1-2" class="btn-suivant-consigne" onclick="switchConsigne('mcgs','1-3')">Suivant</button>
</div>

<div id="mcgs-1-3" class="consigne hidden">
    <form>
        <label>En quelle classe es-tu ?</label>
        <input type="radio" name="segpa" value="true" checked>Segpa <br>
        <input type="radio" name="segpa" value="false">Classe générale<br>
    </form>

    <button id ="btn-suivant-mcgs-1-3" class="btn-suivant-consigne btn-check-segpa" onclick="switchConsigne('mcgs','1-4')">Suivant</button>
</div>

<div id="mcgs-1-4" class="consigne hidden">

    <p>Le résultat de ce test est collectif et anonyme. <br /><br />
        Autrement dit, toi seul connaitra la performance collective des élèves de SEGPA, même les chercheurs ne la connaitront pas.
        Ainsi, tu pourras comparer la performance collective des élèves de SEGPA à celle des élèves de classe générale.
        En revanche, personne ne connaitra ta performance personnelle (ni toi, ni les chercheurs) pourtant elle sera déterminante dans le résultat de ta classe.
    </p>
    <button id ="btn-suivant-mcgs-1-4" class="btn-suivant-consigne" onclick="switchConsigne('mcgs','1-5')">Suivant</button>
</div>

<div id="mcgs-1-5" class="consigne hidden">
    <h2>Consigne</h2>
    <p>Clique sur le plus de noms d’animaux possible dans la liste.<br /> La police changera alors de couleur.<br /> En cas d’erreur tu pourras décliquer.<br /> Attention !<br /> Tu dois utiliser le sens naturel de lecture (de gauche à droite, ligne par ligne).<br />Tu auras un temps limité dès que l’épreuve s’affichera.<br /> Pour être plus rapide, utilise les flèches directionnelles de ton clavier.<br><br />
    </p>
    <button id ="btn-suivant-mcgs-1-5" class="btn-suivant-consigne" onclick="startFirstPreuve()">Démarrer</button>
</div>
