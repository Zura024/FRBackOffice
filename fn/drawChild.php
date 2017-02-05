<?php
/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 4:06 AM
 */
 function drawChild($page){
     global $config;

     foreach ($page as $key => $pages){ ?>
         <li>
         <a href="<?=$config->domain?>/page.php?id=<?=$pages->id?>"><?=$pages->title?></a>
         </li>
     <?}

 }