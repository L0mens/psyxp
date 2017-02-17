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


window.onload = function(){
    element = document.getElementById('message_avertissement_javascript');
    element.parentNode.removeChild(element);
    $("#submit-group").prop('disabled',false)
}