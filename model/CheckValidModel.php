<?php

/**
 * Created by PhpStorm.
 * User: user1
 * Date: 08.02.2017
 * Time: 10:20
 */

class CheckValidModel{

    function check($alias){

        $sql="SELECT `alias` FROM bulk_pages WHERE alias='$alias' ";
        $res=mysql_query($sql) or die(mysql_error());

        if(mysql_num_rows($res) > 0){
            echo "already";
        }else{
            echo  "valid";
        }
    }


}