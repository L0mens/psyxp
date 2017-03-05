/**
 * Created by Lomens on 01/03/2017.
 */

/**
 * TO DO VERIFICATION DES CHAMPS DU FORMULAIRES
 */


var idok = false;
var ageok = false;
var etabok = false;
var postalok =false;


function verifok(){
    if(idok && ageok && etabok && postalok){
        $("#valid-btn-info-form").prop('disabled',false);
    }
    else{
        $("#valid-btn-info-form").prop('disabled',true);
    }
}

$("#input-id").on('input',function() {
    if($("#input-id").val().length == 12){
        idok=true;
    }else{
        idok=false;
    }
    verifok();
});

$("#input-age").on('input',function() {
    if($("#input-age").val() > 1 && $("#input-age").val() < 100){
        ageok=true;
    }else{
        ageok=false;
    }
    verifok();
});

$("#input-etab").on('input',function() {
    if($("#input-etab").val().length > 0){
        etabok=true;
    }else{
        etabok=false;
    }
    verifok();
});

$("#input-postal").on('input',function() {
    if($("#input-postal").val().length > 3){
        postalok=true;
    }else{
        postalok=false;
    }
    verifok();
});