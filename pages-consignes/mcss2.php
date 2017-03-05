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
    <button id ="btn-suivant-mcss-2-1" class="btn-suivant-consigne" onclick="switchConsigne('mcss','2-2')">Suivant</button>
</div>


<div id="mcss-2-2" class="consigne hidden">

    <p>Tu vas passer un questionnaire qui permet de prédire ton niveau en français à la fin
        du collège
    </p>
    <button id ="btn-suivant-mcss-2-2" class="btn-suivant-consigne" onclick="switchConsigne('mcss','2-3')">Suivant</button>
</div>

<div id="mcss-2-3" class="consigne hidden">

    <p>Tu connaitras ton résultat mais nous nous ne le connaitrons pas. Et tu sauras
        si ta performance personnelle est différente de celle des élèves qui ne sont pas en SEGPA.
    </p>
    <button id ="btn-suivant-mcss-2-3" class="btn-suivant-consigne" onclick="switchConsigne('mcss','2-4')">Suivant</button>
</div>

<div id="mcss-2-4" class="consigne hidden">

    <p>Ne réponds pas comme tu penses qu'il est bien de répondre mais par rapport à tes vrais buts.
    </p>
    <button id ="btn-suivant-mcss-2-4" class="btn-suivant-consigne" onclick="startSecondPreuve()">Suivant</button>
</div>