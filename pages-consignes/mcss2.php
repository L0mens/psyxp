<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 26/02/2017
 * Time: 23:14
 */
?>

<div id="mcss-2-1" class="consigne hidden">
    <h2>Questionnaire</h2>
    <span>2/2</span>
    <button id ="btn-suivant-mcss-2-1" class="btn-suivant-consigne" onclick="switchConsigne('mcss','2-4')">Suivant</button>
</div>


<div id="mcss-2-2" class="consigne hidden">

    <p>Tu vas passer un questionnaire conçu pour évaluer le potentiel de réussite en français.
    </p>
    <button id ="btn-suivant-mcss-2-2" class="btn-suivant-consigne" onclick="switchConsigne('mcss','2-3')">Suivant</button>
</div>

<div id="mcss-2-3" class="consigne hidden">

    <p>Le résultat de ce questionnaire est individuel et anonyme.
        Autrement dit, toi seul connaitra ton potentiel personnel, même les chercheurs ne le connaitront pas. Ainsi, tu pourras comparer ton potentiel personnel à celui des élèves de classe générale.
    </p>
    <button id ="btn-suivant-mcss-2-3" class="btn-suivant-consigne" onclick="switchConsigne('mcss','2-4')">Suivant</button>
</div>

<div id="mcss-2-4" class="consigne hidden">

    <p>Concernant le questionnaire, ne réponds pas comme tu penses qu'il est bien de répondre mais par rapport à tes vrais buts. Tu n’as pas de limite de temps pour répondre.
    </p>
    <button id ="btn-suivant-mcss-2-4" class="btn-suivant-consigne" onclick="startSecondPreuve()">Je m’y engage</button>
</div>