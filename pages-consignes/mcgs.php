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

    <p>Tu vas passer une évaluation de lecture silencieuse.
        Ce test est représentatif de ton niveau actuel en français.</p>
    <button id ="btn-suivant-mcgs-1-2" class="btn-suivant-consigne" onclick="switchConsigne('mcgs','1-3')">Suivant</button>
</div>

<div id="mcgs-1-3" class="consigne hidden">
    <form>
        <label>En quelle classe es-tu ?</label>
        <input type="radio" name="segpa" value="true" checked>Segpa <br>
        <input type="radio" name="segpa" value="false">Non-Segpa <br>
    </form>

    <button id ="btn-suivant-mcgs-1-3" class="btn-suivant-consigne btn-check-segpa" onclick="switchConsigne('mcgs','1-4')">Suivant</button>
</div>

<div id="mcgs-1-4" class="consigne hidden">

    <p>Tu ne connaitras pas ton résultat et nous non plus car il sera directement mélangé à ceux des autres élèves de SEGPA. <br><br />
        Nous ne connaitrons pas non plus le résultat moyen des élèves de SEGPA. <br><br />
        Mais toi, tu sauras s’il est différent de celui des élèves qui ne sont pas en SEGPA. <br><br />
        Ta performance sera déterminante dans les résultats de ton groupe.</p>
    <button id ="btn-suivant-mcgs-1-4" class="btn-suivant-consigne" onclick="switchConsigne('mcgs','1-5')">Suivant</button>
</div>

<div id="mcgs-1-5" class="consigne hidden">
    <h2>Consigne</h2>
    <p>Clique sur le plus de noms d’animaux possible dans la liste. Attention tu auras un temps limité dès que l’épreuve s’affichera. <br><br />
        La police changera alors de couleur, en cas d’erreur tu pourras décliquer.
    </p>
    <button id ="btn-suivant-mcgs-1-5" class="btn-suivant-consigne" onclick="startFirstPreuve()">Démarrer</button>
</div>
