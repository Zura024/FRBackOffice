/**
 * Created by user1 on 06.02.2017.
 */


$( "#alias12" ).keyup(function() {
        console.log("hello");
});


function delete_page(id){
    console.log(id);
    $.ajax({
        type : 'POST',
        url  : 'router/delete.php',
        data : {
            id: id
        },
        success :  function(data) {
            if (data=="ok"){

                $("#suc_msg").show();
                setTimeout(function(){
                    window.location.href = "page.php?id="+id;
                }, 3000);

            }

        }
    });


}

function menu(id) {
    console.log("ddfdf");
    if ( $("#demo"+id).hasClass( "in" ) ) {
        console.log("no"+id)
        document.cookie = id+"=false";

    } else {
        console.log("yes"+id)
        document.cookie = id+"=true";
    }
}