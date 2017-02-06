<?php

/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 3:33 AM
 */
class MenuModel
{
    function getMenu($lang_id){

        global $config;

        if(!is_numeric($lang_id)||($lang_id>3)||($lang_id<1)){

             header('location: '.$config->domain.'');

         }

        $query = "SELECT `id`, `parent_id`,`title`,`caption` FROM `bulk_pages`  WHERE lang_id = $lang_id";
        $res=mysql_query($query) or die(mysql_error());
        $pages=array();
        $cnt=0;
        while ($row = mysql_fetch_assoc($res)){
            $row['cnt']=0;
            $pages[]=(object)$row;
            $pages[$cnt]->child=array();
            $cnt++;

        }
        //print_r($pages[0]->cnt);
        for ($i=0; $i<$cnt-1; $i++ ) {
            for ($j = 0; $j < $cnt-1; $j++) {
                $c=0;
                if($pages[$i]->parent_id==$pages[$j]->id){
                    array_push($pages[$j]->child,$pages[$i]);
                    $pages[$j]->cnt=$pages[$j]->cnt+1;
                }

            }

        }

        for ($i=0; $i<$cnt-1; $i++ ) {
            if($pages[$i]->parent_id==0){
                $result[]=$pages[$i];
            }
        }

        return $result;

    }

}