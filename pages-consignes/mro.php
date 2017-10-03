<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 06/03/2017
 * Time: 18:38
 */

?>


<div id="mro-1-1" class="consigne">
    <h2>Test des animaux </h2>
    <span>1/2</span>
    <button id ="btn-suivant-mro-1-1" class="btn-suivant-consigne" onclick="switchConsigne('mro','1-2')">Suivant</button>
</div>


<div id="mro-1-2" class="consigne hidden">

    <p>Tu vas faire une activité de repérage.</p>
    <button id ="btn-suivant-mro-1-2" class="btn-suivant-consigne" onclick="switchConsigne('mro','1-5')">Suivant</button>
</div>

<div id="mro" class="hidden">
    <form>
        <label>En quelle classe es-tu ?</label>
        <input type="radio" name="segpa" value="true" checked >SEGPA <br>
        <input type="radio" name="segpa" value="false" >Classe générale <br>
    </form>
</div>

<div id="mro-1-5" class="consigne hidden">
    <h2>Consigne</h2>
    <p>Clique sur le plus d’animaux possible dans la liste. L'élément changera alors de couleur. En cas d’erreur tu pourras décliquer.<br />
        Attention !<br />
        Tu dois répondre de gauche à droite, ligne par ligne.<br />
        Tu auras un temps limité dès que le test s’affichera. <br />
        Pour être plus rapide, utilise les flèches directionnelles de ton clavier.<br />
    </p>
    <label><input type="checkbox" name="check-valid" id="xp1-consign-verif" value=""/> J'ai bien lu la consigne</label>
    <button id ="btn-suivant-mro-1-5" class="btn-suivant-consigne need-verif" disabled onclick="startFirstPreuve()">Démarrer</button>
</div>
