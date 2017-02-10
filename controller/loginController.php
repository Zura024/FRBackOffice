<?php

/**
 * Created by PhpStorm.
 * User: user1
 * Date: 01.02.2017
 * Time: 15:59
 */
if(!empty($_POST)){

    if(isset($_POST['username']) && isset($_POST['password'])){

        $user = (object) array('username' => $_POST['username'], 'password' => $_POST['password'], 'id' => 0);

        $auth = new adminUser();

        $res = $auth->login($user);


        if($res->status == true){


            header('location: '.$config->domain);

        } else {

            header('location: '.$config->domain.'/login.php?status='.$res->resultCode);

        }

    }

}