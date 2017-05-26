/**
 * Created by Lomens on 14/02/2017.
 */


var currentPage = "page-consigne-xp1";
var currentConsigne ="";




$(".valid-btn").click(function(e){
    gestionXP2();
    switchToScreen("page-contact");
});

$("#valid-btn-info-form").click(function(e){{
    gestionForm();
    switchToScreen("page-fin");

}});

$("#calcul").click(function (e) {

    $( ".selected-word" ).each(function( index ) {

        var coord = $(this)[0].id.split("-");
       // console.log(coord[0] + ";" + coord[1]);
        // console.log( index + ":" + $(this).children(":first").text() );
    });
    $("#page-liste-mot").toggleClass("hidden");
    $("#page-question").toggleClass("hidden");
});

/*
 Gestion de la réponse a la question du type de classe
 */
$(".btn-check-segpa").click(function (e) {
    //console.log($('input[name="segpa"]:checked').val());
});


$(".rep-choice input:radio").change(function(){

    var all_answered = 0;
    $(".rep-choice input:radio").each(function(){


        if($(this)[0].checked)
        {
            all_answered++;
        }
    });
    //console.log(all_answered);
    if(all_answered == 12){
        $(".valid-btn").prop('disabled', false);
    }

});

$(".case-mot").click(function (e) {
    $(e.currentTarget).toggleClass("selected-word");

});

//var
