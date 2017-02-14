<?php

/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 3:33 AM
 */
class MenuModel{


    function saveChild($pages,$parentPage){
        foreach ($pages as $key=>$page){
            if($page->parent_id==$parentPage->id){
                array_push($parentPage->child,$page);
                $page->already=1;
                $this->saveChild($pages,$page);
            }

        }
        return $parentPage;
    }

    function getMenu($lang_id){

        global $config;

        if(!is_numeric($lang_id)||($lang_id>3)||($lang_id<1)){

             header('location: '.$config->domain.'');

        }

        $query = "SELECT `id`, `parent_id`,`title`,`caption` , `lang_id` FROM `bulk_pages`  WHERE lang_id ='$lang_id'&& is_deleted=0 ORDER by sorder";
        $res=mysql_query($query) or die(mysql_error());
        $pages=array();
        $result=array();
        $ar=array();
        $cnt=0;
        while ($row = mysql_fetch_assoc($res)){
            $row['already']=0;
            $pages[]=(object)$row;
            $pages[$cnt]->child=array();
            $cnt++;

        }
        foreach ($pages as $key=>$page){
            if ($page->already==0) {
                $page->already=1;
               $response=$this->saveChild($pages, $page);
               if ($response->parent_id==0){
                    $result[]=$response;
                    if ($response->id==11){

                    }
               }
            }
        }

        $query = "SELECT `alias`, `title`, `id` FROM `bulk_pages` WHERE is_deleted='1' ORDER BY alias,lang_id ";
        $res=mysql_query($query) or die(mysql_error());
        $deleted=array();
        $cnt=0;
        while ($row = mysql_fetch_assoc($res)){
            $deleted[] = (object)$row;
            $cnt++;
        }


        if(mysql_num_rows($res) > 0){
            $j=0;
            while ($j<($cnt - $cnt%3)){
                $ar[]=(object)array('alias' => $deleted[$j]->alias, 'ge' => $deleted[$j]->title, 'en'=>$deleted[$j+1]->title, 'ru'=> $deleted[$j+2]->title);
                $j=$j+3;
            }
        }

        $resul=array();

        array_push($resul,$result);
        array_push($resul,$ar);



        return $resul;
    }


}