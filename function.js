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
    $(".container-fluid").toggleClass("hidden");
});
