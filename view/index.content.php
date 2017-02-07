<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 06.02.2017
 * Time: 16:53
 */

global $config;
?>
<div id="page-wrapper">

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog ">
            <div class="modal-content" style="height: 650px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="margin: auto">Add new page</h4>
                </div>
                <div class="modal-body" style="height: 660px;">
                    <form  method="post" action="<?=$config->domain?>/router/addPage.php">
                        <div>
                            <div id="all" style="background-color: #f2adaa; padding: 10px;">
                                <fieldset>   <input id="alias12" type="text" class="form-control" name="alias" placeholder="Alias" required> </fieldset>
                            </div>
                        </div>
                        <div>
                            <span for"ge"><h4>Ge</h4></span>
                            <div id="ge" style="background-color: #bdf2d5; padding: 10px;">
                                <input type="text" class="form-control" name="title_ge" placeholder="Title Ge" required>
                                <br>
                                <input type="text" class="form-control" name="caption_ge" placeholder="Caption Ge" required>
                            </div>
                        </div>
                        <div>
                            <span for"en"><h4>Eng</h4></span>
                            <div id="en" style="background-color: #bde0f2; padding: 10px">
                                <input type="text" class="form-control" name="title_en" placeholder="Title En" required>
                                <br>
                                <input type="text" class="form-control" name="caption_en" placeholder="Caption En" required>
                            </div>
                        </div>
                        <div>
                            <span for"ru"><h4>Rus</h4></span>
                            <div id="ru" style="background-color: #f0f2da; padding: 10px">
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
    <div style="height: 50px">
        <p style="margin-top: 3px; font-family: sans-serif"> <?if((isset($_GET['suc']))&&($_GET['suc']==1)) echo "Successfully saved"?> </p>
        <p style="margin-top: 3px; font-family: sans-serif"> <?if((isset($_GET['suc']))&&($_GET['suc']==0)) echo "Something Wrong" ?></p>
    </div>
    <iframe src="http://msg.ge" style="width: 100%; height: 700px">
   </iframe>
</div>
