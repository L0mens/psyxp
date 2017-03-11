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
    var nbchar = 12;
    var lgth = $("#input-id").val().length;
    var idval = $("#input-id").val();

    if(lgth == nbchar){
        if(idval.match(/[A-Z]{4}[0-9]{8}/) != null) {
            idok = true;
            $("#input-id").css( "border", "2px green solid" );
        }
    }else{
        idok=false;
        $("#input-id").css( "border", "2px inset" );
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
        if($("#input-etab").val().match(/^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ]/) != null)
            etabok=true;
    }else{
        etabok=false;
    }
    verifok();
});

$("#input-postal").on('input',function() {
    if($("#input-postal").val().length == 5){
        if($("#input-postal").val().match(/[0-9]{5}/) != null)
            postalok=true;
    }else{
        postalok=false;
    }
    verifok();
});