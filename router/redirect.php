<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 04.02.2017
 * Time: 14:51
 */
global $config;

require_once "/../model/redirectModel.php";
if(!empty($_POST) && isset($_POST['id'])){
    $red=new RedirectModel();
    $res=$red->createArray($_POST['id']);
    $red->saveToDb($res);
}