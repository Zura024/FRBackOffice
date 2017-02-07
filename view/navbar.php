<?php
/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 2:52 AM
 */

?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?=$config->domain?>">MSG Admin</a>
    </div>
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
        <li>
            <a class="btn" href="?lang_id=1">Ge</a>
        </li>
        <li>
            <a class="btn" href="?lang_id=2">Eng</a>
        </li>
        <li>
            <a class="btn" href="?lang_id=3">Rus</a>
        </li>
        <li>
            <a href="<?=$config->domain?>/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
        </li>
        </li>
    </ul>

    <div class="collapse navbar-collapse navbar-ex1-collapse" style="width: 500px!important;">
        <ul class="nav navbar-nav side-nav"">
            <li class="active">
                <a> Peges <i class="fa fa-fw fa-power-off fa-2x "  data-toggle="modal" data-target="#myModal" style="float: right; cursor: pointer;"> </i> </a>
            </li>

            <? foreach($page as $key=>$pages){?>

                <? if (empty($pages->child)){?>
                    <li>
                      <a href="<?=$config->domain?>/page.php?id=<?=$pages->id?>"><?=$pages->caption?></a>
                    </li>
                <?} else{

                    if (checkDrop($pages->id)){?>
                        <li>
                            <a onclick="menu(<?=$pages->id?>)" href="javascript:;" style="cursor: pointer"   data-toggle="collapse" class="" id="test " data-target="#demo<?=$pages->id?>"> <?=$pages->caption?> <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo<?=$pages->id?>" class="collapse in">
                                <li>
                                    <a href="<?=$config->domain?>/page.php?id=<?=$pages->id?>"><?=$pages->title?></a>
                                </li>
                                <? $cnt=drawChild($pages->child) ?>
                            </ul>
                        </li>

                   <?} else{?>
                        <li>
                            <a onclick="menu(<?=$pages->id?>)" href="javascript:;" style="cursor: pointer"   data-toggle="collapse" class="collapsed" id="test " data-target="#demo<?=$pages->id?>"> <?=$pages->caption?> <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo<?=$pages->id?>" class="collapse">
                                <li>
                                    <a href="<?=$config->domain?>/page.php?id=<?=$pages->id?>"><?=$pages->title?></a>
                                </li>
                                <? $cnt=drawChild($pages->child) ?>
                            </ul>
                        </li>
                    <?}



                }?>
            <?}?>
        </ul>
    </div>

</nav>

<script>

</script>

