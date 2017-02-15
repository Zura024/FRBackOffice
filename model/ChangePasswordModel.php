<?php

/**
 * Created by PhpStorm.
 * User: user1
 * Date: 10.02.2017
 * Time: 16:42
 */
@session_start();
class ChangePasswordModel{

    function changePassword($pass)
    {
        $password = (json_decode($pass));

        $user = $_SESSION['admin']->username;
        $id = $_SESSION['admin']->id;

        if ($password->new_pass != $password->confirm_pass) {
            $response = (object)array('desc' => "Passwords doesn't match", "statusCode" => 3);
        } else {
            $old_pass = md5($password->old_pass . md5('admin'));
            $sql = "SELECT `password` FROM admin WHERE password='$old_pass' AND username='$user' ";
            $res = (mysql_query($sql));


            if ((mysql_num_rows($res) > 0)) {
                $new_pass = md5($password->new_pass . md5('admin'));
                $query = "UPDATE admin set password='$new_pass' WHERE id='$id'";
                $res = mysql_query($query);
                if ($res) {
                    $response = (object)array('desc' => "Password change successfully", "statusCode" => 0);
                } else {
                    $response = (object)array('desc' => "Please try again", "statusCode" => 4);
                }
            } else {
                $response = (object)array('desc' => "Your password isn't correct", "statusCode" => 3);
                }
            }

        echo(json_encode($response));
    }

}