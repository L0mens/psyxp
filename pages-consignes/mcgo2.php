<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 05/03/2017
 * Time: 15:57
 */

?>

<div id="mcgo-2-1" class="consigne hidden">
    <h2>Questionnaire</h2>
    <span>2/2</span>
    <button id ="btn-suivant-mcgo-2-1" class="btn-suivant-consigne" onclick="switchConsigne('mcgo','2-2')">Suivant</button>
</div>


<div id="mcgo-2-2" class="consigne hidden">

    <p>Tu vas passer un questionnaire qui permet de prédire ton niveau en français à la fin
        du collège
    </p>
    <button id ="btn-suivant-mcgo-2-2" class="btn-suivant-consigne" onclick="switchConsigne('mcgo','2-3')">Suivant</button>
</div>

<div id="mcgo-2-3" class="consigne hidden">

    <p>Tu ne connaitras pas ton résultat et nous non plus car il sera directement mélanger à l’ensemble de ceux des élèves n’étant pas en SEGPA. Nous ne connaitrons pas non plus le résultat moyen des élèves n’étant pas en SEGPA mais toi tu sauras s’il est différent de celui des élèves qui ne sont en SEGPA. Ta performance sera déterminante dans les résultats de ton groupe
    </p>
    <button id ="btn-suivant-mcgo-2-3" class="btn-suivant-consigne" onclick="switchConsigne('mcgo','2-4')">Suivant</button>
</div>

<div id="mcgo-2-4" class="consigne hidden">

    <p>Ne réponds pas comme tu penses qu'il est bien de répondre mais par rapport à tes vrais buts.
    </p>
    <button id ="btn-suivant-mcgo-2-4" class="btn-suivant-consigne" onclick="startSecondPreuve()">Suivant</button>
</div>

