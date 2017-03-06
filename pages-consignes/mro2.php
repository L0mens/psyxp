<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 06/03/2017
 * Time: 18:50
 */

?>

<div id="mro-2-1" class="consigne hidden">
    <h2>Questionnaire</h2>
    <span>2/2</span>
    <button id ="btn-suivant-mro-2-1" class="btn-suivant-consigne" onclick="switchConsigne('mro','2-2')">Suivant</button>
</div>


<div id="mro-2-2" class="consigne hidden">

    <p>Tu vas passer un questionnaire qui va nous permettre de connaitre les buts des élèves.</p>
    <button id ="btn-suivant-mro-2-2" class="btn-suivant-consigne" onclick="switchConsigne('mro','2-4')">Suivant</button>
</div>

<div id="mro-2-4" class="consigne hidden">

    <p>Ne réponds pas comme tu penses qu'il est bien de répondre mais par rapport à tes vrais buts.
    </p>
    <button id ="btn-suivant-mro-2-4" class="btn-suivant-consigne" onclick="startSecondPreuve()">Suivant</button>
</div>
