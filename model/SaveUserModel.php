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
        if (!preg_match('/^[a-zA-Z0-9]{5,}$/', $admin->username) || !is_numeric($admin->role)) {
            $response = (object)array('desc' => "Role - Must be int , Username and Password - String", "statusCode" => 3);
        }else {
            $sql = "update admin set ";
            if($admin->password!=""){
                $password = md5($admin->password . md5('admin'));
                $sql = $sql."password = '$password', ";
            }
            if(isset($admin->username)){

                $sql = $sql."username = '$admin->username', ";
            }
            if(isset($admin->role)){
                $sql = $sql."role = '$admin->role', ";
            }
            if(isset($admin->active)){
                $sql = $sql."active = '$admin->active' ";
            }

            $sql= $sql."where id = '$admin->id'";

            $res = mysql_query($sql) or die(mysql_error());
            if ($res) {
                $response = (object)array('desc' => "Successfully Saved", "statusCode" => 0);
            } else {
                $response = (object)array('desc' => "Please try again", "statusCode" => 3);
            }
        }

        echo(json_encode($response));

    }
}