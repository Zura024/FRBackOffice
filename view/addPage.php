<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 07.02.2017
 * Time: 12:21
 */
?>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog ">
        <div class="modal-content" style="height: 740px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="margin: auto">Add new page</h4>
            </div>
            <div class="modal-body" style="height: 660px;">
                <form  method="post" action="<?=$config->domain?>/router/addPage.php">

                    <div>
                        <span for"ge"><h4>Ge</h4></span>
                        <div id="ge" style="background-color: #bdf2d5; padding: 10px;">
                            <input type="text" class="form-control" name="alias_ge" placeholder="Alias Ge" required>
                            <br>
                            <input type="text" class="form-control" name="title_ge" placeholder="Title Ge" required>
                            <br>
                            <input type="text" class="form-control" name="caption_ge" placeholder="Caption Ge" required>
                        </div>
                    </div>
                    <div>
                        <span for"en"><h4>Eng</h4></span>
                        <div id="en" style="background-color: #bde0f2; padding: 10px">
                            <input type="text" class="form-control" name="alias_en" placeholder="Alias En" required>
                            <br>
                            <input type="text" class="form-control" name="title_en" placeholder="Title En" required>
                            <br>
                            <input type="text" class="form-control" name="caption_en" placeholder="Caption En" required>
                        </div>
                    </div>
                    <div>
                        <span for"ru"><h4>Rus</h4></span>
                        <div id="ru" style="background-color: #f0f2da; padding: 10px">
                            <input type="text" class="form-control" name="alias_ru" placeholder="Alias Ru" required>
                            <br>
                            <input type="text" class="form-control" name="title_ru" placeholder="Title Ru">
                            <br>
                            <input type="text" class="form-control" name="caption_ru" placeholder="Caption Ru">
                        </div>
                    </div>

                    <div>
                        <br>
                        <input type="submit" value="Save" class="btn btn-default" style="float: right">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
