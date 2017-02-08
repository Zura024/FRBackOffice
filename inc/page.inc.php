<?php
/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 4:48 AM
 */
if(!empty($_GET) && isset($_GET['id'])) {
    $res = new PageController();
    $result = $res->getPageById($_GET['id']);
    $page_cont=$result[0];
    $page=$result[1];
}

if(!empty($_GET) && isset($_GET['lang_id'])) {
    $res = new MenuController();
    $page = $res->getMenu($_GET['lang_id']);
}

if(empty($_GET)){
    $res = new MenuController();
    $page = $res->getMenu(1);
}
