/**
 * Created by user1 on 06.02.2017.
 */

function doCheck() {

    var a=$('#all')
    if (a.hasClass("t")){
        return true;
        console.log("aris")

    } else {
        console.log("ar aris")
        $("#all").css("background-color", "#f20300");
            setTimeout(function () {
            $("#all").css("background-color", "#f2827f");
            },100)

        return false;
    }
}

function delete_page(id) {
    bootbox.confirm({
        message: "Do you really want to delete this page?",
        buttons: {
            confirm: {
                label: 'Yes',
                className: 'btn-danger'
            },
            cancel: {
                label: 'No',
                className: 'btn-success'
            }
        },
        callback: function (result) {
            if (result){
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