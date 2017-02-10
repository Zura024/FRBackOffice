<?php

/**
 * Created by PhpStorm.
 * User: user1
 * Date: 07.02.2017
 * Time: 16:50
 */

session_start();

class DeleteModel{
    function deletePage($alias){
        $admin=$_SESSION['admin']->id;
        $date=date("Y/m/d/h/m/s");
        $sql = "update bulk_pages set is_deleted='1', delete_time='$date', delete_by='$admin' WHERE alias='$alias'" ;
        $res=mysql_query($sql);
        if ($res){
            echo "ok";
        }else{
            echo (mysql_error());
        }

    }
}