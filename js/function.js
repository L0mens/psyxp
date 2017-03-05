/**
 * Created by Lomens on 22/01/2017.
 */

var listeRangeMotSelect = [];
var reponseUserXP1 = "";
var reponseUserXP1Slim = "";
var reponseUserXP2 = "";
var timerListeMot = 1000*6;
var currentTimer = 0 ;
var interval = 1000 ;
var codeXp="";
var eleve ;
if(currentTimer <= 0){
    currentTimer = timerListeMot;
}


function gestionXP1() {
    $( ".selected-word" ).each(function( index ) {

        var coord = $(this)[0].id.split("-");

        newRange = parseInt(coord[0])*6 + parseInt(coord[1]);
        console.log(newRange);
        listeRangeMotSelect.push(newRange);
        // console.log( index + ":" + $(this).children(":first").text() );
    });

    for(i = 0 ; i < 486 ; i++){
        if(listeRangeMotSelect.indexOf(i) != -1){
            reponseUserXP1 += "1" ;
        }
        else {
            reponseUserXP1 += "0";
        }

    }


    var i = reponseUserXP1.length-1;
    var noOne = true;
    while (noOne){
        console.log(i);
        if(i<=0)
            noOne = false;
        if(reponseUserXP1[i] == "1"){
            reponseUserXP1Slim = reponseUserXP1.slice(0,i+1);
            noOne=false;
        }
        i--;
    }

    console.log(reponseUserXP1Slim);
}

function gestionXP2(){
    $(".rep-choice input:radio").each(function(){
        if($(this)[0].checked)
        {
            reponseUserXP2 += ""+$(this)[0].value;
        }
    });

    console.log(reponseUserXP2);
}

function gestionForm(){
    var identifiantF = $("#input-id").val();
    var ageF = parseInt($("#input-age").val());
    var sexeF = $("input:radio[name=sexe]:checked").val();
    var classeF = parseInt($("input:radio[name=classe]:checked").val());
    var dyslexieF = $("input:radio[name=dyslexie]:checked").val();
    var etabF = $("#input-etab").val();
    var postalF = $("#input-postal").val();

    eleve = {
        id:identifiantF ,
        codeXP: codeXp,
        age:ageF ,
        sexe:sexeF ,
        classe:classeF ,
        dys:dyslexieF,
        etabl:etabF,
        codeP:postalF,
        xp1:reponseUserXP1Slim,
        xp2:reponseUserXP2
    };

    register();

}

function register(){
    console.log(eleve.id);
    $.get(
        'php/register.php',
        {
            id : eleve.id ,
            codeXP : eleve.codeXP,
            age : eleve.age ,
            sexe : eleve.sexe ,
            classe : eleve.classe ,
            dys : eleve.dys,
            etabl : eleve.etabl,
            codeP : eleve.codeP,
            xp1 : eleve.xp1,
            xp2 : eleve.xp2
        },
        function(data){
            console.log(data);
            $("#valid-text-final").text(data);
        },
        'text'
    );
}

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
        gestionXP1();
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

function startSecondPreuve(){
    switchToScreen("page-question");
}

function startSecondConsigne(){
    switchConsigne(codeXp,"2-1");
    $("#valid-xp1").toggleClass("hidden");
}


window.onload = function(){
    element = document.getElementById('message_avertissement_javascript');
    if(element != null){
        element.parentNode.removeChild(element);
        $("#submit-group").prop('disabled',false);
    }

}