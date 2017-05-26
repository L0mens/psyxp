<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 06/03/2017
 * Time: 18:38
 */

?>


<div id="mro-1-1" class="consigne">
    <h2>Jeu des animaux</h2>
    <span>1/2</span>
    <button id ="btn-suivant-mro-1-1" class="btn-suivant-consigne" onclick="switchConsigne('mro','1-2')">Suivant</button>
</div>


<div id="mro-1-2" class="consigne hidden">

    <p>C'est une activité jeu de repérage</p>
    <button id ="btn-suivant-mro-1-2" class="btn-suivant-consigne" onclick="switchConsigne('mro','1-5')">Suivant</button>
</div>

<div id="mro" class="hidden">
    <form>
        <label>En quelle classe es-tu ?</label>
        <input type="radio" name="segpa" value="true" >Segpa <br>
        <input type="radio" name="segpa" value="false" checked>Non-Segpa <br>
    </form>
</div>

<div id="mro-1-5" class="consigne hidden">
    <h2>Consigne</h2>
    <p>Clique sur le plus d’animaux possible dans la liste. <br><br />
        Attention tu auras un temps limité dès que le jeu s’affichera. <br><br />
        La police changera alors de couleur, en cas d’erreur tu pourras décliquer.
    </p>
    <button id ="btn-suivant-mro-1-5" class="btn-suivant-consigne" onclick="startFirstPreuve()">Démarrer</button>
</div>
