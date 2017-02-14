<?php
/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 3:31 AM
 */
if(!empty($_GET) && isset($_GET['lang_id'])){
    if(!is_numeric($_GET['lang_id'])){
        $_GET['lang_id']=1;
        header('location: '.$config->domain.'');
    }
    $lang_id=$_GET['lang_id'];
    $pages=new MenuController();
    $result=$pages->getMenu($lang_id);
    $page=$result[0];
    $deleted=$result[1];
    if ($lang_id==2)
        $lang="en";
    if ($lang_id==3)
        $lang="ru";
    if ($lang_id==1)
        $lang="ge";
}else{
    $lang_id=1;
    $lang="ge";
    $pages=new MenuController();
    $result=$pages->getMenu($lang_id);
    $page=$result[0];
    $deleted=$result[1];
}

