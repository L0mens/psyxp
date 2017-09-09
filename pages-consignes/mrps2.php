<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 05/03/2017
 * Time: 22:07
 */
?>

<div id="mrps-2-1" class="consigne hidden">
    <h2>Questionnaire</h2>
    <span>2/2</span>
    <button id ="btn-suivant-mrps-2-1" class="btn-suivant-consigne" onclick="switchConsigne('mrps','2-2')">Suivant</button>
</div>


<div id="mrps-2-2" class="consigne hidden">

    <p>Tu vas passer un questionnaire conçu pour évaluer le potentiel de réussite en français.
    </p>
    <button id ="btn-suivant-mrps-2-2" class="btn-suivant-consigne" onclick="switchConsigne('mrps','2-3')">Suivant</button>
</div>

<div id="mrps-2-3" class="consigne hidden">

    <p>Le résultat de ce questionnaire est individuel et visible par les chercheurs.
        Autrement dit, seuls les chercheurs connaitront ton potentiel personnel, pas même toi. Ainsi, ils compareront ton potentiel personnel à celui des élèves de classe générale
    </p>
    <button id ="btn-suivant-mrps-2-3" class="btn-suivant-consigne" onclick="switchConsigne('mrps','2-4')">Suivant</button>
</div>

<div id="mrps-2-4" class="consigne hidden">

    <p>Ne réponds pas comme tu penses qu'il est bien de répondre mais par rapport à tes vrais buts. Tu n’a pas de limite de temps pour répondre.
    </p>
    <button id ="btn-suivant-mrps-2-4" class="btn-suivant-consigne" onclick="startSecondPreuve()">Je m’y engage</button>
</div>
