<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 01.02.2017
 * Time: 18:10
 */
    @session_start();

    if(!isset($_SESSION['admin'])){
        echo ($_SESSION['admin']);
        header('location: '.$config->domain.'/login.php');
    }
?>