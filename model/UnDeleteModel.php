<?php

/**
 * Created by PhpStorm.
 * User: user1
 * Date: 09.02.2017
 * Time: 13:50
 */
session_start();
require_once "/../config/db_congif.php";
require_once "/../config/site_config.php";
class UnDeleteModel{

    function unDeletePage($alias){

        $sql = "update bulk_pages set is_deleted='0' WHERE alias='$alias'" ;
        $res=mysql_query($sql);
        if ($res){
            echo "ok";
        }else{
            echo (mysql_error());
        }

    }

}