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
