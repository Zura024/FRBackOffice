<?php
/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 2:55 AM
 */
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
    <div class="container-fluid">
        <form action="<?=$config->domain?>/router/redirect.php" method="post">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-2 col-md-6">
                    <div class="panel" style="background-color: #F0AD4E; color: white">
                        <div class="panel-heading" style="height: 30px; text-align: center; padding: 5px;">
                            <h4  id="1" style="margin: auto; cursor: pointer"> Meta Tags   <i style="float: right" class="fa fa-fw fa-arrows-v"></i> </h4>
                        </div>
                        <div id="meta" style="display: none">
                            <span for="meta_desc">Meta Desc:</span> <br> <input type="text" class="form-control" name="meta_descr" value="<? if (isset($page_cont->meta_descr)){?><?= $page_cont->meta_descr ?><?}?>">
                            <span for="meta_desc">Meta Key:</span> <br> <input class="form-control" type="text" name="meta_key" value="<? if (isset($page_cont->meta_key)){?><?= $page_cont->meta_key?><?}?>">
                            <span for="meta_desc">Alias:</span> <br> <input type="text" class="form-control" name="alias" value="<? if (isset($page_cont->alias)){?><?= $page_cont->alias?><?}?>">
                            <span for="meta_desc">Title:</span> <br> <input type="text" class="form-control" name="title" value="<? if (isset($page_cont->title)){?><?= $page_cont->title?><?}?>">
                        </div>
                    </div>
                    <script>
                        $( "#1" ).click(function() {
                            $("#meta" ).fadeToggle( 500, "linear" );
                        });
                    </script>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="panel" style="background-color: #5bc0de; color: white">
                        <div class="panel-heading" style="height: 30px; text-align: center; padding: 5px;">
                            <h4  id="3" style="margin: auto; cursor: pointer"> Caption  <i style="float: right" class="fa fa-fw fa-arrows-v"></i> </h4>
                        </div>
                        <div id="cont" style="display: none">
                            <span for="meta_desc">Caption:</span><br><input class="form-control" type="text" name="caption" value="<? if (isset($page_cont->caption)){?><?= $page_cont->caption?><?}?>">
                            <input  style="display: none" type="text" name="id" value="<? if (isset($page_cont->id)){?><?= $page_cont->id?><?}?>">
                        </div>
                    </div>
                    <script> function test1() {
                        }
                        $( "#3" ).click(function() {
                            $("#cont" ).fadeToggle( 500, "linear" );
                        });
                    </script>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="panel" style="background-color: #5CB85C; color: white">
                        <div class="panel-heading" style="height: 30px; text-align: center; padding: 5px;">
                            <h4  id="2" style="margin: auto; cursor: pointer"> Template   <i style="float: right" class="fa fa-fw fa-arrows-v"></i>  </h4>
                        </div>
                        <div id="temp" style="display: none">
                            <span for="meta_desc">Sorder:</span> <br><input class="form-control" type="text" name="sorder" value="<? if (isset($page_cont->sorder)){?><?= $page_cont->sorder?><?}?>">
                            <span for="meta_desc">Active:</span> <br><input  class="form-control" type="text" name="active" value="<? if (isset($page_cont->active)){?><?= $page_cont->active?><?}?>">
                            <span for="meta_desc">Template:</span><br><input class="form-control" type="text" name="template" value="<? if (isset($page_cont->template)){?><?= $page_cont->template?><?}?>">
                            <span for="meta_desc">Language Id:</span><br><input class="form-control" type="text" name="lang_id" value="<? if (isset($page_cont->lang_id)){?><?= $page_cont->lang_id?><?}?>">
                        </div>
                    </div>
                    <script> function test1() {
                        }
                        $( "#2" ).click(function() {
                            $("#temp" ).fadeToggle( 500, "linear" );
                        });
                    </script>
                </div>
                <div class="col-lg-1 col-md-6">
                     <a class=" btn btn-danger" onclick="delete_page(<?=$page_cont->id?>)" >Delete</a>
                </div>
                <div class="col-lg-1 col-md-6" style="float: right">
                    <input type="submit"  value="Save" class="btn btn-default" >
                </div>
                <div class="col-lg-2 col-md-6" style="float: left">
                    <?if((isset($_GET['suc']))&&($_GET['suc']==1)){?>
                        <div class="alert alert-success" style="height: 35px; width: 185px; float: left; text-align: center; padding: 7px;">
                            <strong>Successfully Saved</strong>
                        </div>
                    <?}?>
                    <?if((isset($_GET['suc']))&&($_GET['suc']==0)){?>
                        <div class="alert alert-danger" style="height: 35px; width: 200px; float: left; text-align: center; padding: 7px;">
                            <strong>Page has doesn't changed </strong>
                        </div>
                    <?}?>
                    <div class="alert alert-success" id="suc_msg" style="display: none; height: 35px; width: 200px; float: left; text-align: center; padding: 7px;">
                        <strong>Page has doesn't changed</strong>
                    </div>
                    <div class="alert alert-danger" id="error_msg" style="display: none; height: 35px; width: 200px; float: left; text-align: center; padding: 7px;">
                        <strong>Page has doesn't changed</strong>
                    </div>
                </div>
            </div>

            </div>
            <div id="tx" style="margin-top: 10px">
                <textarea style="height: 0px; width: 0px" name="content"><?if(isset($page_cont->content)){?><?= $page_cont->content?><?}?></textarea>
            </div>
            <script>
                CKEDITOR.replace( 'content' );
            </script>
        </form>

    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
