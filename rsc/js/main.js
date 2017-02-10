/**
 * Created by user1 on 06.02.2017.
 */

function unDeleted(alias) {
    console.log("unDeleted+"+alias);
    $.ajax({
        type : 'POST',
        url  : 'router/unDelete.php',
        data : {
            alias: alias
        },
        success :  function(data) {
            if (data=="ok"){
                console.log("ok");
                $("#delete"+alias).remove();
            }else {
                console.log(data)
            }

        }
    });
}
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
            },30)

        return false;
    }
}

function delete_page(alias,id) {
    console.log(alias+"  "+id);
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
                $.ajax({
                    type : 'POST',
                    url  : 'router/delete.php',
                    data : {
                        alias: alias
                    },
                    success :  function(data) {
                        if (data=="ok"){
                            console.log(data);
                            $("#suc_msg").show();
                            console.log("#page"+id)
                            $("#page"+id).remove();
                        }else {
                            console.log(data);
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