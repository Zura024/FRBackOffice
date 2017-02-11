<?php

/**
 * Created by PhpStorm.
 * User: user1
 * Date: 11.02.2017
 * Time: 15:37
 */
class SaveUserModel{
    function saveUser($user){
        $admin=json_decode($user);
        $password= md5($admin->password . md5('admin'));
        $sql="UPDATE admin set username='$admin->username', password='$password', role='$admin->role', active='$admin->active' WHERE id='$admin->id'";
        $res=mysql_query($sql) or die(mysql_error());
        if ($res){
            echo "ok";
        }else{
            echo "error";
        }


    }
}