<?php

/**
 * Created by PhpStorm.
 * User: user1
 * Date: 11.02.2017
 * Time: 14:06
 */

class GetUserModel{

    function getUser($id){
        global $config;
        if(!is_numeric($id)){

            header('location: '.$config->domain.'');

        }else {

            $sql = "SELECT `username`,`id`,`role`, `active`, `password` FROM admin WHERE id='$id'";
            $res = mysql_query($sql);
            $row = mysql_fetch_assoc($res);
            $admin = (object)$row;


            echo json_encode($admin);
        }
    }

}