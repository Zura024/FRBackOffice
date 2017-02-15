<?php

/**
 * Created by PhpStorm.
 * User: user1
 * Date: 03.02.2017
 * Time: 13:27
 */

@session_start();
class RedirectModel{

    function saveToDb($array){

            global $conn;
            global $config;
            $sql = "update bulk_pages set ";
            if(isset($array->title)){
                $sql = $sql."title = '$array->title', ";
            }
            if(isset($array->alias)){
                $sql = $sql."alias = '$array->alias', ";
            }
            if(isset($array->caption)){
                $sql = $sql."caption = '$array->caption', ";
            }
            if(isset($array->content)){
                $sql = $sql."content = '$array->content', ";
            }
            if(isset($array->sorder)){
                $sql = $sql."sorder = '$array->sorder', ";
            }
            if(isset($array->meta_descr)){
                $sql = $sql."meta_descr = '$array->meta_descr', ";
            }
            if(isset($array->meta_key)){
                $sql = $sql."meta_key = '$array->meta_key', ";
            }
            if(isset($array->active)){
                $sql = $sql."active = '$array->active', ";
            }
            if(isset($array->template)){
                $sql = $sql."template = '$array->template', ";
            }
            if(isset($array->lang_id)){
                $sql = $sql."lang_id = '$array->lang_id', ";
            }
            if(isset($array->lang_id)){
                $sql = $sql."parent_id = '$array->parent_id' ";
            }

            $sql= $sql."where id = '$array->id'";
            $result=mysql_query($sql) or die(mysql_error());

            if ($result){

                $_SESSION['msg']="success";

                header('location: '.$config->domain.'/page.php?id='.$array->id.'&lang_id='.$array->lang_id);
            }else{
                $_SESSION['error']="error";
                header('location: '.$config->domain.'/page.php?id='.$array->id.'&lang_id='.$array->lang_id);
            }


    }

    function createArray(){
        $arr=(object)array();


        $arr->parent_id=$_POST['page'];
        $arr->title=preg_replace("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ  -]/", '', $_POST['title']);
        $arr->alias=preg_replace("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ   -]/", '', $_POST['alias']);
        $arr->caption=preg_replace("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ   -]/", '', $_POST['caption']);
        $arr->id=preg_replace("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ   -]/", '', $_POST['id']);
        $arr->content=addslashes(trim($_POST['content']));
        $arr->sorder=preg_replace("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ   -]/", '', $_POST['sorder']);
        $arr->meta_descr=preg_replace("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ   -]/", '', $_POST['meta_descr']);
        $arr->meta_key=preg_replace("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ   -]/", '', $_POST['meta_key']);
        $arr->active=preg_replace("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ   -]/", '', $_POST['active']);
        $arr->template=preg_replace("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ   -]/", '', $_POST['template']);
        $arr->lang_id=preg_replace("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ   -]/", '', $_POST['lang_id']);


        return $arr;
    }
}