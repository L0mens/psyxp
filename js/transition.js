/**
 * Created by Lomens on 14/02/2017.
 */

var timerListeMot = 100*60;
var currentTimer = 0 ;
var interval = 1000 ;
var currentPage = "page-liste-mot";

function switchToScreen(idpage){
    $("#"+currentPage).toggleClass("hidden");
    $("#"+idpage).toggleClass("hidden");
    currentPage = idpage;
}

function timerEpreuveListeMot(){
    if(currentTimer <= 0){
        clearInterval(idIntervalEpreuveUn);
        console.log("FIN DE L'EPREUVE");
        switchToScreen("page-question");
    }
    currentTimer -= interval;
    console.log("Temps restant " + currentTimer/1000);
}
if(currentTimer <= 0){
    currentTimer = timerListeMot;
}
var idIntervalEpreuveUn = setInterval(timerEpreuveListeMot,interval);
