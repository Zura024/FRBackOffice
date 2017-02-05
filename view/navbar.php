<?php
/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 2:52 AM
 */
?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="">MSG Admin</a>
    </div>
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
        <li>
            <a class="btn" href="<?=$config->domain?>/?lang_id=1">Ge</a>
        </li>
        <li>
            <a class="btn" href="<?=$config->domain?>/?lang_id=2">Eng</a>
        </li>
        <li>
            <a class="btn" href="<?=$config->domain?>/?lang_id=3">Rus</a>
        </li>
        <li>
            <a href="<?=$config->domain?>/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
        </li>
        </li>
    </ul>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav"">
            <li class="active">
                <a href=""> Peges </a>
            </li>

            <? foreach($page as $key=>$pages){?>
                <? if (empty($pages->child)){?>
                    <li>
                        <a href="<?=$config->domain?>/page.php?id=<?=$pages->id?>"><?=$pages->title?></a>
                    </li>
                <?} else{?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo<?=$pages->id?>"><i class="fa fa-fw fa-arrows-v"></i> <?=$pages->caption?> <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo<?=$pages->id?>" class="collapse">
                            <li>
                                <a href="<?=$config->domain?>/page.php?id=<?=$pages->id?>"><?=$pages->title?></a>
                            </li>
                            <? drawChild($pages->child) ?>
                        </ul>
                    </li>
                <?}?>
            <?}?>
        </ul>
    </div>
</nav>

