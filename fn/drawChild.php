<?php
/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 4:06 AM
 */
 function drawChild($page){
     global $config;
     ?>
     <?foreach ($page as $key => $pages){ ?>
         <li>
         <a  id="page<?=$pages->id?>" href="<?=$config->domain?>/page.php?id=<?=$pages->id?>"><?=$pages->title?></a>
         </li>
     <?}

 }

function checkDrop($id){?>
    <?if (isset($_COOKIE[$id])&&($_COOKIE[$id]=='true')){?>
        <?return true?>
    <?}else{?>
        <?return false?>
    <?}
}

function checkSession(){?>
    <?if (isset($_SESSION['msg'])){?>
        <? unset($_SESSION['msg']);
        return true
        ?>
    <?}else{?>
        <?return false
        ?>
    <?}
}
function checkErrorSession(){?>
    <?if (isset($_SESSION['error'])){?>
        <? unset($_SESSION['error']); return true?>
    <?}else{?>
        <?return false?>
    <?}
}
