<?php

/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 4:49 AM
 */
class PageModel{
    function getPageById($id){
        global $config;

        if(!is_numeric($id)){

            header('location: '.$config->domain.'');

        }

        $query= "SELECT `parent_id`,`alias`,`sorder`,`meta_descr`,`meta_key`,`alias_id`,`active`,`template`,`caption`, `title`,`lang_id`, `id`, `content` FROM `bulk_pages` WHERE id=$id";
        $res=mysql_query($query);
        $page=array();



        while ($row = mysql_fetch_assoc($res)){
            $page=(object)$row;
        }


        $menu= new MenuController();
       // $page->child=$menu->getChild($page->lang_id,$page->id);

        $result=array();
        array_push($result,$page);
        $men=$menu->getMenu($page->lang_id);
        array_push($result,$men[0]);
        array_push($result,$men[1]);
        return $result;

    }
}