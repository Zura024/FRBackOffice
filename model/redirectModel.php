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
        global $config;
        $arr=(object)array();
        $arr->error=0;

        $arr->parent_id=$_POST['page'];
        $arr->title=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/", $_POST['title']) ?  $_POST['title'] : ($arr->error=1);
        $arr->alias=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/", $_POST['alias']) ?  $_POST['alias'] : ($arr->error=1) ;
        $arr->caption=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/", $_POST['caption'])  ?  $_POST['caption'] : ($arr->error=1);
        $arr->id=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/", $_POST['id']) ?  $_POST['id'] : ($arr->error=1);
        $arr->content=addslashes(trim($_POST['content']));
        $arr->sorder=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/", $_POST['sorder']) ?  $_POST['sorder'] : ($arr->error=1);
        $arr->meta_descr=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/", $_POST['meta_descr']) ?  $_POST['meta_descr'] : ($arr->error=1);
        $arr->meta_key=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/", $_POST['meta_key']) ?  $_POST['meta_key'] : ($arr->error=1);
        $arr->active=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/", $_POST['active']) ?  $_POST['active'] : ($arr->error=1);
        $arr->template=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/", $_POST['template']) ?  $_POST['template'] : ($arr->error=1);
        $arr->lang_id=!preg_match("/[^A-Za-z0-9ა-ჰА-Яа-яЀ-Џ*  -]/", $_POST['lang_id']) ?  $_POST['lang_id'] : ($arr->error=1);

        if ($arr->error==1){
            $_SESSION['error']="error";
            header('location: '.$config->domain.'/page.php?id='.$arr->id.'&lang_id='.$arr->lang_id);
            return false;
        }else{
            return $arr;
        }
    }
}