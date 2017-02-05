<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 03.02.2017
 * Time: 13:27
 */

require_once '/../model/redirectModel.php';
class redirectController{
    function redirectPage(){
        $red = new RedirectModel();
        $array = $red->createArray();
        $red->saveToDb($array);
    }
}


