/**
 * Created by user1 on 06.02.2017.
 */

function changePassword() {
    var old_pass = $('#old_pass').val();
    var new_pass = $('#new_pass').val();
    var confirm_pass = $('#confirm_new_pass').val();
    console.log(old_pass+" "+new_pass+" "+confirm_pass);
    if (((old_pass.length<5)||(old_pass.length>11))||(new_pass.length<5)|| (new_pass.length>11)||(confirm_pass.length<5)|| (confirm_pass.length>11)){
        $('#msgsg').remove();
        $('#pass_msg').append('<p id="msgsg"> Nassword must have been 5-10 character </p>');
        console.log("error")
    }else {
        if (new_pass!=confirm_pass){
            $('#msgsg').remove();
            $('#pass_msg').append('<p id="msgsg"> New password Does not Match </p>');
        }else {
            var passwords={
                old_pass:old_pass,
                new_pass:new_pass,
                confirm_pass:confirm_pass
            }
            $.ajax({
                type : 'POST',
                url  : 'router/changePassword.php',
                data : {
                    password : JSON.stringify(passwords)
                },
                success :  function(data) {
                    if (data=="ok"){
                        console.log(data);
                    }else {
                        console.log(data)
                    }

                }
            });
        }
    }

}
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
                $("#delete"+alias).remove();
                location.reload();
                //window.location.href = "http://stackoverflow.com";
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
            cancel: {
                label: 'No',
                className: 'btn-success'
            },
            confirm: {
                label: 'Yes',
                className: 'btn-danger'

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