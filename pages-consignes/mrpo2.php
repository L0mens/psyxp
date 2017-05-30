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

    <p>Tu vas passer un questionnaire qui permet de prédire ton niveau en français à la fin
        du collège.
    </p>
    <button id ="btn-suivant-mrpo-2-2" class="btn-suivant-consigne" onclick="switchConsigne('mrpo','2-3')">Suivant</button>
</div>

<div id="mrpo-2-3" class="consigne hidden">

    <p>Tu ne connaitras pas ni  ton résultat ni le résultat de ton groupe. <br><br />
        Nous ne connaitrons pas non plus ton résultat personnel mais nous saurons si la performance moyenne des élèves de SEGPA est différente de celle des élèves qui ne sont pas en SEGPA. <br><br />
        Ta performance sera déterminante dans la moyenne de ton groupe.
    </p>
    <button id ="btn-suivant-mrpo-2-3" class="btn-suivant-consigne" onclick="switchConsigne('mrpo','2-4')">Suivant</button>
</div>

<div id="mrpo-2-4" class="consigne hidden">

    <p>Ne réponds pas comme tu penses qu'il est bien de répondre mais par rapport à tes vrais buts. Tu n’as pas de limite de temps pour répondre.
    </p>
    <button id ="btn-suivant-mrpo-2-4" class="btn-suivant-consigne" onclick="startSecondPreuve()">Suivant</button>
</div>