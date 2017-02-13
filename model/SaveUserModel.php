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
        if (!preg_match('/^[a-zA-Z0-9]{5,}$/', $admin->username) || !preg_match('/^[a-zA-Z0-9]{5,}$/', $admin->password) || !is_numeric($admin->role)) {
            $response = (object)array('desc' => "Role - Must be int , Username and Password - String", "statusCode" => 3);
        }else {
            $password = md5($admin->password . md5('admin'));
            $sql = "UPDATE admin set username='$admin->username', password='$password', role='$admin->role', active='$admin->active' WHERE id='$admin->id'";
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