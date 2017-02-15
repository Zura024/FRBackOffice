<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 11.02.2017
 * Time: 12:31
 */
require_once '../model/ManagementModel.php';
require_once "../config/db_congif.php";
require_once "../config/site_config.php";

if ((empty($_POST)) && (empty($_GET))){
    $manage = new ManagementModel();
    $manage->getUser();
}