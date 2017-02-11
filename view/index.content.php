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
    <? include 'view/unDelete.php' ?>
    <? include 'view/changePassword.php' ?>
    <? include 'view/userManage.php' ?>
    <? include 'view/user.php' ?>

    <div style="height: 50px">
        <?if(checkSession()){?>
            <div class="alert alert-success" style="height: 35px; width: 185px; float: left; text-align: center; padding: 7px;">
                <strong> Successfully Saved </strong>
            </div>
        <?}?>
        <?if(checkErrorSession()){?>
            <div class="alert alert-danger" style="height: 35px; width: 280px; float: left; text-align: center; padding: 7px;">
                <strong> Page haven't saved successfully </strong>
            </div>
        <?}?>
    </div>
    <iframe src="http://msg.ge/?lang=<?=$lang?>" style="width: 100%; height: 700px">
   </iframe>
</div>
