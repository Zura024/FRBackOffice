<?php

/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 3:33 AM
 */
class MenuController{
    function getMenu($lang_id){
        $menu=new MenuModel();
        return $menu->getMenu($lang_id);
    }

    function getChild($lang_id,$id){
        $menu=new MenuModel();
        return $menu->getChild($lang_id,$id);
    }
}