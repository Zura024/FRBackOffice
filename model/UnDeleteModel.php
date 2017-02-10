<?php

/**
 * Created by PhpStorm.
 * User: user1
 * Date: 09.02.2017
 * Time: 13:50
 */
session_start();

class UnDeleteModel{

    function unDeletePage($alias){

        $sql = "update bulk_pages set is_deleted='0' , delete_by='0', delete_time='0' WHERE alias='$alias'" ;
        $res=mysql_query($sql);
        if ($res){
            echo "ok";
        }else{
            echo (mysql_error());
        }

    }

}