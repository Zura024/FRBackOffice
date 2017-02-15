<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 04.02.2017
 * Time: 14:51
 */
global $config;

require_once "../model/redirectModel.php";
require_once "../config/db_congif.php";
require_once "../config/site_config.php";
if(!empty($_POST) && isset($_POST['id'])){
    $red=new RedirectModel();
    $res=$red->createArray();
    $red->saveToDb($res);
}