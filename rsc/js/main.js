/**
 * Created by user1 on 06.02.2017.
 */
function menu(id) {

     console.log(id);
     if ($( "#demo"+id ).hasClass( "in" )){
         console.log("no")
         document.cookie = id+"=false";

     }else {
         console.log("yes");
         document.cookie = id+"=true";
     }

    /*$( "#demo2" ).addClass( "in" )
    $("#demo2").height( 45*8 );
    $('#demo2').attr('aria-expanded', true);*/
}