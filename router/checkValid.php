<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 08.02.2017
 * Time: 10:19
 */

require_once '/../model/CheckValidModel.php';

if (!empty($_POST)&&(isset($_POST['alias']))) {
    $del = new CheckValidModel();
    $del->check($_POST['alias']);
}