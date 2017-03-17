<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 07.02.2017
 * Time: 11:51
 */

@session_start();

class AddPageModel{
    function addPage($arr){

        global $config;
        global $conn;
        $sql="INSERT INTO bulk_pages (title, alias, caption, lang_id) VALUES ('$arr->title_ge', '$arr->alias', '$arr->caption_ge', '1' )";
        $result=mysql_query($sql) or die(mysql_error());
        if ($result){
            $sql="INSERT INTO bulk_pages (title, alias, caption, lang_id) VALUES ('$arr->title_en', '$arr->alias', '$arr->caption_en', '2' )";
            $result=mysql_query($sql) or die(mysql_error());
            if ($result){
                $sql="INSERT INTO bulk_pages (title, alias, caption, lang_id) VALUES ('$arr->title_ru', '$arr->alias', '$arr->caption_ru', '3' )";
                $result=mysql_query($sql) or die(mysql_error());
                if ($result){
                    $_SESSION['msg']="success";
                    header('location: '.$config->domain);
                }else{
                    $_SESSION['error']="error";
                    header('location: '.$config->domain);
                }
            }else{
                $_SESSION['error']="error";
                header('location: '.$config->domain);
            }
        }else{
            $_SESSION['error']="error";
            header('location: '.$config->domain);
        }
    }

    function createArray(){
        global $config;
        $arr=(object)array();
        $arr->error=0;
        $arr->alias=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/", $_POST['alias']) ?  $_POST['alias'] : ($arr->error=1);
        $arr->title_ge=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/",  $_POST['title_ge']) ?  $_POST['title_ge'] : ($arr->error=1) ;
        $arr->title_en=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/",  $_POST['title_en'])  ?  $_POST['title_en'] : ($arr->error=1) ;
        $arr->title_ru=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/",  $_POST['title_ru']) ?  $_POST['title_ru'] : ($arr->error=1) ;
        $arr->caption_ge=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/",  $_POST['caption_en']) ?  $_POST['caption_ge'] : ($arr->error=1) ;
        $arr->caption_en=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/",  $_POST['caption_en']) ?  $_POST['caption_en'] : ($arr->error=1) ;
        $arr->caption_ru=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/",  $_POST['caption_ru']) ?  $_POST['caption_ru'] : ($arr->error=1) ;
        if ($arr->error==1){
            $_SESSION['error']="error";
            header('location: '.$config->domain);
            return false;
        }else{
            return $arr;
        }


    }
}
