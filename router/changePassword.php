<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 10.02.2017
 * Time: 16:42
 */
require_once '../model/ChangePasswordModel.php';
require_once "../config/db_congif.php";
require_once "../config/site_config.php";

if (!empty($_POST) &&($_POST['password'])){

    $password=new ChangePasswordModel();
    $password->changePassword($_POST['password']);

}