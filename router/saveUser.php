<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 11.02.2017
 * Time: 15:36
 */
require_once "../model/SaveUserModel.php";
require_once "../config/db_congif.php";
require_once "../config/site_config.php";

if (!empty($_POST)&&(isset($_POST['user']))) {

    $user = $_POST['user'];

    $u = new SaveUserModel();
    $u->saveUser($user);
}