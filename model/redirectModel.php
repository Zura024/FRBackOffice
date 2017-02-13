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
                $sql = $sql."lang_id = '$array->lang_id' ";
            }
            if (isset($array->parent_id ))

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

        $arr->page=$_POST['page'];
        $arr->title=addslashes(trim($_POST['title']));
        $arr->alias=addslashes(trim($_POST['alias']));
        $arr->caption=addslashes(trim($_POST['caption']));
        $arr->id=addslashes(trim($_POST['id']));
        $arr->content=addslashes(trim($_POST['content']));
        $arr->sorder=addslashes(trim($_POST['sorder']));
        $arr->meta_descr=addslashes(trim($_POST['meta_descr']));
        $arr->meta_key=addslashes(trim($_POST['meta_key']));
        $arr->active=addslashes(trim($_POST['active']));
        $arr->template=addslashes(trim($_POST['template']));
        $arr->lang_id=addslashes(trim($_POST['lang_id']));
        //$arr->alias_id=$_POST['alias_id'];

        return $arr;
    }
}