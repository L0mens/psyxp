/**
 * Created by Lomens on 14/02/2017.
 */

var timerListeMot = 100*60;
var currentTimer = 0 ;
var interval = 1000 ;
var currentPage = "page-consigne-xp1";
var currentConsigne ="";
var codeXp="";

function switchToScreen(idpage){
    $("#"+currentPage).toggleClass("hidden");
    $("#"+idpage).toggleClass("hidden");
    currentPage = idpage;
}

function switchConsigne(code,idsuivant){
    if(currentConsigne == "" || currentConsigne == null){
        currentConsigne = code+"-1-1";
        codeXp = code;
    }
    $("#"+currentConsigne).toggleClass("hidden");
    $("#"+code+"-"+idsuivant).toggleClass("hidden");
    currentConsigne = code+"-"+idsuivant;
}

function timerEpreuveListeMot(){
    if(currentTimer <= 0){
        clearInterval(idIntervalEpreuveUn);
        console.log("FIN DE L'EPREUVE");
        switchToScreen("page-consigne-xp2");
    }
    currentTimer -= interval;
    console.log("Temps restant " + currentTimer/1000);
}

function startFirstPreuve(){
    switchToScreen("page-liste-mot");
    idIntervalEpreuveUn = setInterval(timerEpreuveListeMot,interval);
}

function startSecondConsigne(){
    switchConsigne(codeXp,"2-1");
    $("#valid-xp1").toggleClass("hidden");
}

if(currentTimer <= 0){
    currentTimer = timerListeMot;
}

//var
