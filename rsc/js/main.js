/**
 * Created by user1 on 06.02.2017.
 */
function saveUser() {
    var id = $('#user_id').val();
    var username = $('#user_username').val();
    var password = $('#user_password').val();
    var role = $('#user_active').val();
    var active = $('#user_role').val();

    var user={
        id:id,
        username:username,
        password:password,
        role:role,
        active:active
    }

    $.ajax({
        type : 'POST',
        url  : 'router/saveUser.php',
        data : {
            user : JSON.stringify(user)
        },
        success :  function(data) {
            console.log(data);

        }
    });


}
function getUser() {
    $('.t').remove();
    $.ajax({
        type : 'POST',
        url  : 'router/userManagement.php',
        data : {
        },
        success :  function(data) {
            var users=JSON.parse(data);
            for(var i=0; i<users.length; i++){
                var id="<td> <p class='i' style='margin-top: 5px'>" + users[i].id + "</p></td>";
                var u="<td> <p style='margin-top: 5px'>" + users[i].username + "</p></td>";
                var role="<td> <p style='margin-top: 5px'>" + users[i].role + "</p></td>";
                var active="<td> <p style='margin-top: 5px'>" + users[i].active + "</p></td>";
                $('#user_table').append("<tr class='t' style='cursor: pointer'  onclick='getUserByid(this)' data-dismiss='modal' data-toggle='modal' data-target='#myModal4' >"+ id +  u + role + active +"</tr> ")
            }

        }
    });
}

function getUserByid(a) {
    $('#modal_t').remove();
    $('#user_body').remove();
    var id=$( a ).find($('.i')).text();
    $.ajax({
        type : 'POST',
        url  : 'router/getUser.php',
        data : {
            id:id
        },
        success :  function(data) {
            var user=JSON.parse(data);
            $('#modal_header').append("<h4 class='modal-title' id='modal_t' style='margin: auto'>"+ user.username + "</h4> ");
            $('#user_b').append("<div id='user_body'></div>")
            $('#user_body').append("<div class='form-group' style='display: none'><input type='text' class='form-control' id='user_id'  required placeholder='id' value="+ user.id +"> </div>")
            $('#user_body').append("<div class='form-group'> <label style='margin-left: 5px' for='user_username'>Username</label> <input type='text' class='form-control' id='user_username' required placeholder='Username' value="+ user.username +"></div>")
            $('#user_body').append("<div class='form-group'><label style='margin-left: 5px' for='user_password'>Password</label><input type='password' class='form-control' id='user_password' required placeholder='*******' value=''></div>")
            $('#user_body').append("<div class='form-group'><label style='margin-left: 5px' for='user_active'>Active</label><input type='text' class='form-control' id='user_active' required placeholder='Active' value="+ user.active +"></div>")
            $('#user_body').append("<div class='form-group'><label style='margin-left: 5px' for='user_role'>Role</label>  <input type='text' class='form-control' id='user_role' required placeholder='Role' value="+ user.role +"></div>")
            $('#user_body').append("<button style='float: right' class='btn btn-default' onclick='saveUser()'> Save </button>")
            $('#user_body').append("<button data-toggle='modal' data-dismiss='modal' data-target='#myModal3' class='btn btn-default' onclick='saveUser()'> back </button>")
        }
    });


}
function changePassword() {
    var old_pass = $('#old_pass').val();
    var new_pass = $('#new_pass').val();
    var confirm_pass = $('#confirm_new_pass').val();
    //console.log(old_pass+" "+new_pass+" "+confirm_pass);
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
                    var res=JSON.parse(data);
                    console.log(data);
                    if (res.statusCode==0){
                        $('#ms').remove();
                        $('#msg').removeClass("alert");
                        $('#msg').removeClass("alert-danger");
                        $('#msg').addClass("alert");
                        $('#msg').addClass("alert-success");
                        $('#msg').append("<strong id='ms'>"+ res.desc +"</strong>");
                        setTimeout(function () {
                            $('#ms').remove();
                            $('#msg').removeClass("alert");
                            $('#msg').removeClass("alert-danger");
                            $('#msg').removeClass("alert-success");
                        },4000)
                    }else{
                        $('#ms').remove();
                        $('#msg').removeClass("alert");
                        $('#msg').removeClass("alert-success");
                        $('#msg').addClass("alert");
                        $('#msg').addClass("alert-danger");
                        $('#msg').append("<strong id='ms'>"+ res.desc +"</strong>");
                        setTimeout(function () {
                            $('#ms').remove();
                            $('#msg').removeClass("alert");
                            $('#msg').removeClass("alert-danger");
                            $('#msg').removeClass("alert-success");
                        },4000)
                    }

                }
        });
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