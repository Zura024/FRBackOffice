<?php

/**
 * Created by PhpStorm.
 * User: user1
 * Date: 11.02.2017
 * Time: 12:32
 */
class ManagementModel{

    function getUser(){

        $query = "SELECT `id`, `username`,`password`,`role`, `active` FROM `admin`";
        $res=mysql_query($query) or die(mysql_error());
        $user=array();
        while ($row=mysql_fetch_assoc($res)){
            $user[]=(object)$row;
        }

        echo json_encode($user);

    }


}