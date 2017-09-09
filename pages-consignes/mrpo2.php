<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 06/03/2017
 * Time: 18:26
 */

?>


<div id="mrpo-2-1" class="consigne hidden">
    <h2>Questionnaire</h2>
    <span>2/2</span>
    <button id ="btn-suivant-mrpo-2-1" class="btn-suivant-consigne" onclick="switchConsigne('mrpo','2-2')">Suivant</button>
</div>


<div id="mrpo-2-2" class="consigne hidden">

    <p>Tu vas passer un questionnaire conçu pour évaluer le potentiel de réussite en français.
    </p>
    <button id ="btn-suivant-mrpo-2-2" class="btn-suivant-consigne" onclick="switchConsigne('mrpo','2-3')">Suivant</button>
</div>

<div id="mrpo-2-3" class="consigne hidden">

    <p>Le résultat de ce questionnaire est individuel et visible par les chercheurs.
        Autrement dit, seuls les chercheurs connaitront ton potentiel personnel, pas même toi. Ainsi, ils compareront ton potentiel personnel à celui des élèves de SEGPA.
    </p>
    <button id ="btn-suivant-mrpo-2-3" class="btn-suivant-consigne" onclick="switchConsigne('mrpo','2-4')">Suivant</button>
</div>

<div id="mrpo-2-4" class="consigne hidden">

    <p>Ne réponds pas comme tu penses qu'il est bien de répondre mais par rapport à tes vrais buts. Tu n’a pas de limite de temps pour répondre.
    </p>
    <button id ="btn-suivant-mrpo-2-4" class="btn-suivant-consigne" onclick="startSecondPreuve()">Je m’y engage</button>
</div>