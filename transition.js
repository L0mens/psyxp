/**
 * Created by Lomens on 14/02/2017.
 */

var timerListeMot = 100*60;
var curentTimer = 0 ;
var interval = 1000 ;
var currentPage = "page-liste-mot";

function switchToScreen(idpage){
    $("#"+currentPage).toggleClass("hidden");
    $("#"+idpage).toggleClass("hidden");
    currentPage = idpage;
}

function timerEpreuveListeMot(){
    if(curentTimer <= 0){
        clearInterval(idIntervalEpreuveUn);
        console.log("FIN DE L'EPREUVE");
        switchToScreen("page-question");
    }
    curentTimer -= interval;
    console.log("Temps restant " + curentTimer/1000);
}
if(curentTimer <= 0){
    curentTimer = timerListeMot;
}
var idIntervalEpreuveUn = setInterval(timerEpreuveListeMot,interval);
