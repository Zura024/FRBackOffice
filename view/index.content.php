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

    <? include 'view/addPage.php'?>



    <div style="height: 50px" onclick="t()">
        <?if((isset($_GET['suc']))&&($_GET['suc']==1)){?>
            <div class="alert alert-success" style="height: 35px; width: 185px; float: left; text-align: center; padding: 7px;">
                <strong>Successfully Saved</strong>

            </div>
        <?}?>
        <?if((isset($_GET['suc']))&&($_GET['suc']==0)){?>
            <div class="alert alert-danger" style="height: 35px; width: 200px; float: left; text-align: center; padding: 7px;">
                <strong>Page hasn't saved</strong>
            </div>
        <?}?>
    </div>
    <iframe src="http://msg.ge/?lang=<?=$lang?>" style="width: 100%; height: 700px">
   </iframe>
</div>
