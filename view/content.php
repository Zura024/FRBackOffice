<?php
/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 2:55 AM
 */
?>
<div id="page-wrapper">

    <div class="container-fluid">
        <form action="<?=$config->domain?>/inc/redirect.inc.php" method="post">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel-yellow">
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

                <div class="col-lg-3 col-md-6">
                    <div class="panel-green">
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
                <div class="col-lg-3 col-md-6">
                    <div class="panel-red">
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
                <div class="col-lg-3 col-md-6">
                    <input type="submit" style="float: right;"  value="Save" class="btn btn-default" >
                    <p style="margin-top: 3px; font-family: sans-serif"> <?if((isset($_GET['suc']))&&($_GET['suc']==1)) echo "Successfully saved"?> </p>
                    <p style="margin-top: 3px; font-family: sans-serif"> <?if((isset($_GET['suc']))&&($_GET['suc']==0)) echo "Something Wrong" ?></p>

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
