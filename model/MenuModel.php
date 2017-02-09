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

        $query = "SELECT `id`, `parent_id`,`title`,`caption` , `lang_id` FROM `bulk_pages`  WHERE lang_id ='$lang_id'&& is_deleted=0 ORDER by sorder";
        $res=mysql_query($query) or die(mysql_error());
        $pages=array();
        $result=array();
        $cnt=0;
        while ($row = mysql_fetch_assoc($res)){
            $row['cnt']=0;
            $pages[]=(object)$row;
            $pages[$cnt]->child=array();
            $cnt++;
        }


        for ($i=0; $i<$cnt; $i++ ) {
            for ($j = 0; $j < $cnt; $j++) {
                if($pages[$i]->parent_id==$pages[$j]->id){
                    array_push($pages[$j]->child,$pages[$i]);
                    $pages[$j]->cnt=$pages[$j]->cnt+1;

                }
            }

        }


       for ($i=0; $i<$cnt; $i++ ) {
            if($pages[$i]->parent_id==0){
                $result[]=$pages[$i];
            }
        }


        $query = "SELECT `alias`, `title`, `id` FROM `bulk_pages` WHERE is_deleted='1' ORDER BY alias ";
        $res=mysql_query($query) or die(mysql_error());
        $deleted=array();
        $cnt=0;
        while ($row = mysql_fetch_assoc($res)){
            $deleted[] = (object)$row;
            $cnt++;
        }
        $j=0;
        $i=0;
        $ar=array();
        if(mysql_num_rows($res) > 0){
            while ($j<($cnt - $cnt%3)){
                $ar[]=(object)array('alias' => $deleted[$j]->alias, 'ge' => $deleted[$j]->title, 'en'=>$deleted[$j+1]->title, 'ru'=> $deleted[$j+2]->title);
                $j=$j+3;
                $i++;
            }
        }

        $resul=array();

        array_push($resul,$result);
        array_push($resul,$ar);



        return $resul;
    }

}