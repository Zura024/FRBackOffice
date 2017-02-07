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

 function drawClass($id){?>
     <?if (isset($_COOKIE[$id])&&($_COOKIE[$id]=='true')){?>
         <??>
    <?}else{?>
         <?="collapsed"?>
     <?}
 }

 function drawAttr($id){
     if (isset($_COOKIE[$id])&&($_COOKIE[$id]=='true')){?>
         <?= "aria-expanded='true'"?>
     <?}else{?>
        <?= "aria-expanded='false'"?>
     <?}
 }

 function drawUlClass($id){
     if (isset($_COOKIE[$id])&&($_COOKIE[$id]=='true')){?>
         <?="collapse in"?>
     <?}else{?>
         <?="collapse"?>
     <?}


 }

 function drawStyle($id,$px){?>
     <?$px=$px*2?>
     <?if (isset($_COOKIE[$id])&&($_COOKIE[$id]=='true')){?>
         <?= " style=\"height:'380';\""?>
     <?}else{?>
         <?= " style=\"height: 0px;\""?>
     <?}
 }