<?php
/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 2:55 AM
 */
@session_start();
/*die(print_r($_SESSION))*/
?>
<script>
    $( document ).ready(function() {
        $('#lang').change(function () {
                $("#lang_input").val(this.value);
                console.log(this.value);
                console.log($("#lang_input").val());
        })

        $('#active').change(function () {
            $("#active_input").val(this.value);
            console.log(this.value);
            console.log($("#active_input").val());
        })

    });
</script>
<div id="page-wrapper">
    <? include 'view/addPage.php'?>
    <? include 'view/unDelete.php' ?>
    <? include 'view/changePassword.php' ?>
    <div class="container-fluid">
        <form action="<?=$config->domain?>/router/redirect.php" method="post">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-2 col-md-6">
                    <div class="panel" style="background-color: #F0AD4E; color: white">
                        <div class="panel-heading" style="height: 30px; text-align: center; padding: 5px;">
                            <h4  id="1" style="margin: auto; cursor: pointer"> Meta Tags   <i style="float: right" class="fa fa-fw fa-arrows-v"></i> </h4>
                        </div>
                        <? if (checkDrop("meta")){?>
                        <div id="meta" class="droped" style="display: block;">
                            <?}else{?>
                            <div id="meta" style="display: none;">
                                <?}?>
                                <span for="meta_desc">Meta Desc:</span> <br> <input type="text" class="form-control" name="meta_descr" value="<? if (isset($page_cont->meta_descr)){?><?= $page_cont->meta_descr ?><?}?>">
                                <span for="meta_desc">Meta Key:</span> <br> <input class="form-control" type="text" name="meta_key" value="<? if (isset($page_cont->meta_key)){?><?= $page_cont->meta_key?><?}?>">
                                <span for="meta_desc">Alias:</span> <br> <input type="text" class="form-control" name="alias" value="<? if (isset($page_cont->alias)){?><?= $page_cont->alias?><?}?>">
                                <span for="meta_desc">Title:</span> <br> <input type="text" class="form-control" name="title" value="<? if (isset($page_cont->title)){?><?= $page_cont->title?><?}?>">
                            </div>
                        </div>
                        <script>
                            $( "#1" ).click(function() {
                                $("#meta" ).fadeToggle( 500, "linear" );
                                if($("#meta").hasClass("droped")) {
                                    $('#meta').removeClass("droped")
                                    document.cookie ="meta=false";
                                    console.log("gashlilia");
                                }else{
                                    $('#meta').addClass("droped")

                                    document.cookie = "meta=true";
                                    console.log("damalulia");
                                }
                            });
                        </script>
                    </div>
                <div class="col-lg-2 col-md-6">
                    <div class="panel" style="background-color: #5bc0de; color: white">
                        <div class="panel-heading" style="height: 30px; text-align: center; padding: 5px;">
                            <h4  id="3" style="margin: auto; cursor: pointer"> Caption  <i style="float: right" class="fa fa-fw fa-arrows-v"></i> </h4>
                        </div>
                        <? if (checkDrop("cont")){?>
                        <div id="cont" class="droped" style="display: block">
                            <?}else{?>
                            <div id="cont" style="display: none">
                                <?}?>
                                <span for="meta_desc">Caption:</span><br><input class="form-control" type="text" name="caption" value="<? if (isset($page_cont->caption)){?><?= $page_cont->caption?><?}?>">
                                <input  style="display: none" type="text" name="id" value="<? if (isset($page_cont->id)){?><?= $page_cont->id?><?}?>">
                            </div>
                        </div>
                        <script> function test1() {
                            }
                            $( "#3" ).click(function() {
                                $("#cont" ).fadeToggle( 500, "linear" );
                                if($("#cont").hasClass("droped")) {
                                    $('#cont').removeClass("droped")
                                    document.cookie = "cont=false";
                                    console.log("gashlilia");
                                }else{
                                    $('#cont').addClass("droped")

                                    document.cookie = "cont=true";
                                    console.log("damalulia");
                                }
                            });
                        </script>
                    </div>
                <div class="col-lg-2 col-md-6">
                    <div class="panel" style="background-color: #5CB85C; color: white">
                        <div class="panel-heading" style="height: 30px; text-align: center; padding: 5px;">
                            <h4  id="2" style="margin: auto; cursor: pointer"> Template   <i style="float: right" class="fa fa-fw fa-arrows-v"></i>  </h4>
                        </div>
                        <? if (checkDrop("temp")){?>
                        <div id="temp"  class="droped" style="display: block">
                            <?}else{?>
                            <div id="temp" style="display: none">
                                <?}?>
                                <span for="meta_desc">Language:</span><br><select id="lang" class="form-control">
                                    <option value="1" <? if (($page_cont->lang_id==1)&&(isset($page_cont->lang_id))){?><?="selected"?><?}?> >Ge</option>
                                    <option value="2" <? if (($page_cont->lang_id==2)&&(isset($page_cont->lang_id))){?><?="selected"?><?}?>>Eng</option>
                                    <option value="3" <? if (($page_cont->lang_id==3)&&(isset($page_cont->lang_id))){?><?="selected"?><?}?> >Ru</option>
                                    <option <? if (!isset($page_cont->lang_id)){?><?="selected"?><?}?>></option>
                                </select>
                                <span for="meta_desc">Active:</span><br><select id="active" class="form-control">
                                    <option value="1" <? if (($page_cont->active==1)&&(isset($page_cont->active))){?><?="selected"?><?}?> >Enabled</option>
                                    <option value="0" <? if (($page_cont->active==0)&&(isset($page_cont->active))){?><?="selected"?><?}?>>Disabled</option>
                                    <option <? if (!isset($page_cont->active)){?><?="selected"?><?}?>></option>
                                </select>
                                <span for="meta_desc">Sorder:</span> <br><input class="form-control" type="text" name="sorder" value="<? if (isset($page_cont->sorder)){?><?= $page_cont->sorder?><?}?>">
                                <input  style="display: none" id="active_input" class="form-control" type="text" name="active" value="<? if (isset($page_cont->active)){?><?= $page_cont->active?><?}?>">
                                <span for="meta_desc">Template:</span><br><input class="form-control" type="text" name="template" value="<? if (isset($page_cont->template)){?><?= $page_cont->template?><?}?>">
                                <input  id="lang_input" style="display: none" class="form-control" type="text" name="lang_id" value="<? if (isset($page_cont->lang_id)){?><?= $page_cont->lang_id?><?}?>">
                            </div>
                        </div>
                        <script> function test1() {
                            }
                            $( "#2" ).click(function() {
                                $("#temp" ).fadeToggle( 500, "linear" );
                                if($("#temp").hasClass("droped")) {
                                    $('#temp').removeClass("droped")
                                    document.cookie = "temp=false";
                                    console.log("gashlilia");
                                }else{
                                    $('#temp').addClass("droped")

                                    document.cookie = "temp=true";
                                    console.log("damalulia");
                                }

                            });
                        </script>
                    </div>
                <div class="col-lg-1 col-md-6" style="width: 80px!important;">
                    <input type="submit"  value="Save" class="btn btn-default" >
                </div>
                <div class="col-lg-2 col-md-6" style="min-width: 205px!important;">
                    <?if(checkSession()){?>
                        <div class="alert alert-success msg" style=" min-width: 205px!important;  text-align: center; padding: 7px; ">
                            <strong> Successfully Saved </strong>
                        </div>
                    <?}?>
                    <?if(checkErrorSession()){?>
                        <div class="alert alert-danger msg" style=" min-width: 205px!important;  text-align: center; padding: 7px;">
                            <strong> Page hasn't saved successfully </strong>
                        </div>
                    <?}?>
                    <div class="alert alert-success msg" id="suc_msg" style="display: none;  min-width: 205px!important; text-align: center; padding: 7px;">
                        <strong>Page deleted successfully</strong>
                    </div>
                    <div class="alert alert-danger msg" id="error_msg" style="display: none;  min-width: 205px!important;  text-align: center; padding: 7px;">
                        <strong >Page hasn't deleted</strong>
                    </div>
                </div>
                    <div class="col-lg-1 col-md-6" id="save" style=" float: right; width: 85px!important;">
                        <a class=" btn btn-danger" onclick="delete_page( '<?=$page_cont->alias?>',<?=$page_cont->id?> )" > Delete </a>
                    </div>
            </div>
            <div id="tx" style="margin-top: 10px">
                <textarea style="height: 0px; width: 0px" name="content"><?if(isset($page_cont->content)){?><?= $page_cont->content?><?}?></textarea>
            </div>
            <script>
                CKEDITOR.replace( 'content' );
            </script>
        </form>
        <style>
            @media (min-width:991px)and (max-width:1199px ) {
                .msg{
                    margin-top: 10px;
                }
                #save{
                    float: inherit!important;
                    margin-top: 5px!important;
                }

            }
            @media (min-width:0px )and (max-width:990px) {
                .msg{
                    float: none!important;
                    margin-top: 10px;
                }
                #save{
                    float: left!important;
                    margin-top: 5px!important;
                }
            }
        </style>

    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
