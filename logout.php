<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 01.02.2017
 * Time: 14:42
 */
require_once "model/adminUserModel.php";
require_once "config/db_congif.php";
require_once "config/site_config.php";
$user = new adminUser();
$user->logout();