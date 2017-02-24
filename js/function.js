/**
 * Created by Lomens on 22/01/2017.
 */

$(".case-mot").click(function (e) {
   $(e.currentTarget).toggleClass("selected-word");

});



$("#calcul").click(function (e) {

    $( ".selected-word" ).each(function( index ) {

        var coord = $(this)[0].id.split("-");
        console.log(coord[0] + ";" + coord[1]);
        // console.log( index + ":" + $(this).children(":first").text() );
    });
    $("#page-liste-mot").toggleClass("hidden");
    $("#page-question").toggleClass("hidden");
});

/*
    Gestion de la réponse a la question du type de classe
 */
$(".btn-check-segpa").click(function (e) {
    console.log($('input[name="segpa"]:checked').val());
});



window.onload = function(){
    element = document.getElementById('message_avertissement_javascript');
    if(element != null){
        element.parentNode.removeChild(element);
        $("#submit-group").prop('disabled',false);
    }

}