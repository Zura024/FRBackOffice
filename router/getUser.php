<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 11.02.2017
 * Time: 14:06
 */
require_once "../model/GetUserModel.php";
require_once "../config/db_congif.php";
require_once "../config/site_config.php";

if (!empty($_POST)&&(isset($_POST['id']))) {
    $id = $_POST['id'];
    $admin = new GetUserModel();
    $admin->getUser($id);
}