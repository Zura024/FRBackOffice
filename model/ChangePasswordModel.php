<?php

/**
 * Created by PhpStorm.
 * User: user1
 * Date: 10.02.2017
 * Time: 16:42
 */

class ChangePasswordModel{

    function changePassword($pass){
        $password=(json_decode($pass));
        $old_pass=md5($password->old_pass.md5('admin'));
        $sql="SELECT `password` FROM admin WHERE password='$old_pass'";
        $res=(mysql_query($sql));
        if((mysql_num_rows($res) > 0)){
            echo "okss";
        }else{
            echo "no";
        }

    }

}