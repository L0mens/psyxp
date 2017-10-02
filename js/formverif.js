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
var naissanceok = false;
var nomok = false;
var prenomok = false;


function verifok(){
    if(prenomok && nomok && naissanceok  && etabok && postalok){
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

$( "#cb-valid" ).on( "click", function(){
    $("#btn-valid").prop("disabled",!this.checked);
});

$( "#xp1-consign-verif" ).on( "click", function(){
    console.log("click");
    $(".need-verif").prop("disabled",!this.checked);
});

$("#input-nom").on('input',function() {
    if($("#input-nom").val().length > 1){
        nomok=true;
    }else{
        nomok=false;
    }
    verifok();
});

$("#input-prenom").on('input',function() {
    if($("#input-prenom").val().length > 1){
        prenomok=true;
    }else{
        prenomok=false;
    }
    verifok();
});

$("#input-naissance").on('input',function() {

    console.log("test naissance");
    if($("#input-naissance").val().match(/^(0{1}[1-9]|[12][0-9]|3[01])[\/](0{1}[1-9]|1[012])[\/]\d{4}$/)){

        var date = $("#input-naissance").val().split("/");
        console.log(date[0] + " /// " + date[1] + " //// " + date[2]);
        naissanceok=true;
        if(date[2] > 2017 || date[2] < 1900){
            naissanceok = false;
        }
    }else{
        naissanceok=false;
    }
    verifok();
});