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
         <a id="page<?=$pages->id?>" href="<?=$config->domain?>/page.php?id=<?=$pages->id?>"><?=$pages->caption?></a>
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
function drawParent($page,$page_cont){?>
    <? $cnt=0;?>
    <? foreach ($page as $key=>$pages){
        if ($pages->id==$page_cont->parent_id){
            $cnt++;
            return $pages->caption;
        }
    } ?>

    <?if ($cnt==0){
        return $page_cont->caption;
    }?>
<?}?>

<?function getChild($page,$depth,$page_cont){
    if($page->already!=2){
        $page->already=2;
        if (($depth==1)&&($page->id!=$page_cont->id)){?>
            <option <? if ($page_cont->parent_id==$page->id){?><?="selected"?><?}?> value="<?=$page->id?>" ><?='&nbsp&nbsp&nbsp&nbsp'.$page->caption?></option><?
        }
        if ($depth==2&&($page->id!=$page_cont->id)){?>
            <option <? if ($page_cont->parent_id==$page->id){?><?="selected"?><?}?> value="<?=$page->id?>"><?='&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$page->caption?></option><?
        }
        if ($depth==3&&($page->id!=$page_cont->id)){?>
            <option <? if ($page_cont->parent_id==$page->id){?><?="selected"?><?}?> value="<?=$page->id?>"><?='&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$page->caption?></option><?
        }
        if ($depth==0&&($page->id!=$page_cont->id)){?>
            <option style="font-weight: bold" <? if ($page_cont->parent_id==$page->id){?><?="selected"?><?}?> value="<?=$page->id?>"><?=$page->caption?></option>
        <?}
        if ($depth==4&&($page->id!=$page_cont->id)){?>
            <option <? if ($page_cont->parent_id==$page->id){?><?="selected"?><?}?> value="<?=$page->id?>"><?='&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$page->title?></option><?
        }

    }
    if(!empty($page->child)){
        foreach ($page->child as $key=>$child){
            getChild($child,$depth+1,$page_cont);
        }
    }
}?>

