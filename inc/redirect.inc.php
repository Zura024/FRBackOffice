<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 04.02.2017
 * Time: 14:51
 */
global $config;
require_once "/../controller/RedirectController.php";
if(!empty($_POST) && isset($_POST['id'])){
    $red= new RedirectController();
    $red->redirectPage($_POST['id']);
}