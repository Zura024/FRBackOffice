<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 07.02.2017
 * Time: 16:49
 */
require_once '/../model/DeleteModel.php';


if (!empty($_POST)&&(isset($_POST['alias']))) {
    $del = new DeleteModel();
    $del->deletePage($_POST['alias']);
}