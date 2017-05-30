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

    <p>Tu vas passer un questionnaire qui permet de prédire ton niveau en français à la fin
        du collège.
    </p>
    <button id ="btn-suivant-mcgs-2-2" class="btn-suivant-consigne" onclick="switchConsigne('mcgs','2-3')">Suivant</button>
</div>

<div id="mcgs-2-3" class="consigne hidden">

    <p>Tu ne connaitras pas ton résultat et nous non plus car il sera directement mélangé à ceux des autres élèves de SEGPA. <br><br />
        Nous ne connaitrons pas non plus le résultat moyen des élèves de SEGPA. <br><br />
        Mais toi, tu sauras s’il est différent de celui des élèves qui ne sont pas en SEGPA. <br><br />
        Ta performance sera déterminante dans les résultats de ton groupe.</p>
    <button id ="btn-suivant-mcgs-2-3" class="btn-suivant-consigne" onclick="switchConsigne('mcgs','2-4')">Suivant</button>
</div>

<div id="mcgs-2-4" class="consigne hidden">

    <p>Ne réponds pas comme tu penses qu'il est bien de répondre mais par rapport à tes vrais buts. Tu n’as pas de limite de temps pour répondre.
    </p>
    <button id ="btn-suivant-mcgs-2-4" class="btn-suivant-consigne" onclick="startSecondPreuve()">Suivant</button>
</div>
