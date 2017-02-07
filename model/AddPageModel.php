<?php

/**
 * Created by PhpStorm.
 * User: user1
 * Date: 07.02.2017
 * Time: 11:51
 */
require_once "/../config/db_congif.php";
require_once "/../config/site_config.php";
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
                    header('location: '.$config->domain.'/?&suc=1');
                }else{
                    header('location: '.$config->domain.'/?&suc=0');
                }
            }else{
                header('location: '.$config->domain.'/?&suc=0');
            }

        }else{
            header('location: '.$config->domain.'/?&suc=0');
        }



    }

    function createArray(){
        $arr=(object)array();

        $arr->title_ge=addslashes(trim($_POST['title_ge']));
        $arr->alias=addslashes(trim($_POST['alias']));
        $arr->caption_ge=addslashes(trim($_POST['caption_ge']));
        $arr->title_en=addslashes(trim($_POST['title_en']));
        $arr->caption_en=addslashes(trim($_POST['caption_en']));
        $arr->title_ru=addslashes(trim($_POST['title_ru']));
        $arr->caption_ru=addslashes(trim($_POST['caption_ru']));

        return $arr;
    }

}