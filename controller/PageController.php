<?php

/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 4:48 AM
 */
class PageController
{
    function getPageById($id){
        $page=new PageModel();
        return $page->getPageById($id);
    }
}