<?php
/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 4:48 AM
 */
if(!empty($_GET) && isset($_GET['id'])) {
    if(!is_numeric($_GET['id'])){
        $_GET['id']=1;
        header('location: '.$config->domain.'');
    }
    $id=$_GET['id'];
    $res = new PageController();
    $result = $res->getPageById($id);
    $page_cont=$result[0];
    $page=$result[1];
    $deleted=$result[2];
}

if(!empty($_GET) && isset($_GET['lang_id'])) {
    if(!is_numeric($_GET['lang_id'])){
        $_GET['lang_id']=1;
        header('location: '.$config->domain.'');
    }
    $lang_id=$_GET['lang_id'];
    $pages=new MenuController();
    $result=$pages->getMenu($lang_id);
    $page=$result[0];
    $deleted=$result[1];
}

if(empty($_GET)){
    $res = new MenuController();
    $result = $res->getMenu(1);
    $page=$result[0];
    $deleted=$result[1];
}
