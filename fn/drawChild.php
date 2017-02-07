<?php
/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 4:06 AM
 */
 function drawChild($page ){
     global $config;
     $cnt=0;
     ?>
     <?foreach ($page as $key => $pages){ ?>
         <? $cnt++?>
         <li>
         <a href="<?=$config->domain?>/page.php?id=<?=$pages->id?>"><?=$pages->title?></a>
         </li>
     <?}

     return $cnt;

 }

 function checkDrop($id){?>
     <?if (isset($_COOKIE[$id])&&($_COOKIE[$id]=='true')){?>
         <?return true?>
    <?}else{?>
         <?return false?>
     <?}
 }
