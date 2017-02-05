<?php

/**
 * Created by PhpStorm.
 * User: user1
 * Date: 01.02.2017
 * Time: 15:59
 */
require_once '/../model/adminUserModel.php';
require_once "/../config/site_config.php";
require_once "/../config/db_congif.php";




if(!empty($_POST)){

    if(isset($_POST['username']) && isset($_POST['password'])){

        $user = (object) array('username' => $_POST['username'], 'password' => $_POST['password']);

        //die($_POST['username']." ". $_POST['password']."  dfdf");

        $auth = new adminUser();

        $res = $auth->login($user);
//            die(print_r($res));

        if($res->status == true){


            header('location: '.$config->domain);

        } else {

            header('location: '.$config->domain.'login.php?fail='.$res->Desc);

        }

    }

}