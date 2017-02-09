<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 07.02.2017
 * Time: 12:21
 */
?>
<script>
    $( document ).ready(function() {

        $( "#alias" ).keyup(function() {

            var alias=this.value
            console.log(alias);
            if (this.value!="") {
                $.ajax({
                    type: 'POST',
                    url: 'router/checkValid.php',
                    data: {
                        alias: alias
                    },
                    success: function (data) {
                        console.log(data);
                        if (data == "valid") {
                            $("#all").addClass("t");
                            $("#all").css("background-color", "#8ef079");
                        } else {
                            $("#all").removeClass("t");
                            $("#all").css("background-color", "#f2827f");
                        }
                    }
                });
            }else {
                $("#all").css("background-color", "#E0E0E0");
            }

        });


    });

</script>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content" style="height: 650px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="margin: auto">Add new page</h4>
            </div>
            <div class="modal-body" style="height: 660px;">
                <form  onsubmit=" return doCheck()" method="post" action="<?=$config->domain?>/router/addPage.php">
                    <div>
                        <div id="all" style="background-color: #E0E0E0; padding: 10px; border-radius: 5px;">
                            <fieldset> <input autocomplete="off" id="alias" type="text" class="form-control" name="alias" placeholder="Alias" required> </fieldset>
                        </div>
                    </div>
                    <div>
                        <span for"ge"><h4>Ge</h4></span>
                        <div id="ge" style="background-color: #bdf2d5; padding: 10px; border-radius: 5px;">
                            <input autocomplete="off" type="text" class="form-control" name="title_ge" placeholder="Title Ge" required>
                            <br>
                            <input autocomplete="off" type="text" class="form-control" name="caption_ge" placeholder="Caption Ge" required>
                        </div>
                    </div>
                    <div>
                        <span for"en"><h4>Eng</h4></span>
                        <div id="en" style="background-color: #bde0f2; padding: 10px ; border-radius: 5px;">
                            <input autocomplete="off" type="text" class="form-control" name="title_en" placeholder="Title En" required>
                            <br>
                            <input autocomplete="off" type="text" class="form-control" name="caption_en" placeholder="Caption En" required>
                        </div>
                    </div>
                    <div>
                        <span for"ru"><h4>Rus</h4></span>
                        <div id="ru" style="background-color: #f0f2da; padding: 10px; border-radius: 5px;">
                            <input autocomplete="off" type="text" class="form-control" name="title_ru" placeholder="Title Ru">
                            <br>
                            <input autocomplete="off" type="text" class="form-control" name="caption_ru" placeholder="Caption Ru">
                        </div>
                    </div>

                    <div>
                        <br>
                        <input autocomplete="off" type="submit" value="Save" class="btn btn-default" style="float: right">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

