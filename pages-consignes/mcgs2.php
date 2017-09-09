<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 05/03/2017
 * Time: 15:57
 */
?>

<div id="mcgs-2-1" class="consigne hidden">
    <h2>Questionnaire</h2>
    <span>2/2</span>
    <button id ="btn-suivant-mcgs-2-1" class="btn-suivant-consigne" onclick="switchConsigne('mcgs','2-2')">Suivant</button>
</div>


<div id="mcgs-2-2" class="consigne hidden">

    <p>Tu vas passer un questionnaire conçu pour évaluer le potentiel de réussite en français.
    </p>
    <button id ="btn-suivant-mcgs-2-2" class="btn-suivant-consigne" onclick="switchConsigne('mcgs','2-3')">Suivant</button>
</div>

<div id="mcgs-2-3" class="consigne hidden">

    <p>Le résultat de ce questionnaire est collectif et anonyme.
        Autrement dit, toi seul connaitra le potentiel collectif des élèves de SEGPA, même les chercheurs ne le connaitront pas.
        Ainsi, tu pourras comparer le potentiel collectif des élèves de SEGPA à celui des élèves de classe générale.
        En revanche, personne ne connaitra ton potentiel personnel (ni toi, ni les chercheurs) pourtant il sera déterminant dans le résultat de ta classe.
    </p>
    <button id ="btn-suivant-mcgs-2-3" class="btn-suivant-consigne" onclick="switchConsigne('mcgs','2-4')">Suivant</button>
</div>

<div id="mcgs-2-4" class="consigne hidden">

    <p>Ne réponds pas comme tu penses qu'il est bien de répondre mais par rapport à tes vrais buts. Tu n’a pas de limite de temps pour répondre.
    </p>
    <button id ="btn-suivant-mcgs-2-4" class="btn-suivant-consigne" onclick="startSecondPreuve()">Je m’y engage</button>
</div>
