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
           <a  href="?lang_id=1"> <img src="https://lipis.github.io/flag-icon-css/flags/4x3/ge.svg" style=" width: 20px; height: 20px; cursor: pointer"></a>
        </li>
        <li>
            <a class="btn" href="?lang_id=2">Eng</a>
        </li>
        <li>
            <a  href="?lang_id=2"> <img src="https://lipis.github.io/flag-icon-css/flags/4x3/um.svg" style="width: 20px; height: 20px; cursor: pointer"></a>
        </li>
        <li>
            <a class="btn" href="?lang_id=3">Rus</a>
        </li>
        <li>
            <a  href="?lang_id=3"> <img src="https://lipis.github.io/flag-icon-css/flags/4x3/ru.svg" style=" width: 20px; height: 20px; cursor: pointer"></a>
        </li>
        <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$_SESSION['admin']->username?> <b class="caret"></b></a>
            <ul class="dropdown-menu" style="width: 200px!important;">
                <li>
                    <a data-toggle="modal" data-target="#myModal2" style="cursor: pointer"> <i class="fa fa-fw fa-key"></i> Change password</a>
                </li>
                <?if ($_SESSION['admin']->role==83){?>
                    <li>
                    <a onclick="getUser()" data-toggle="modal" data-target="#myModal3" style="cursor: pointer" ><i class="fa fa-fw fa-gear"></i> User Management  </a>
                    </li>
                <?}?>
                <li class="divider"></li>
                <li>
                    <a href="<?=$config->domain?>/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
        </li>
    </ul>

    <div class="collapse navbar-collapse navbar-ex1-collapse" style="width: 500px!important;">
        <ul class="nav navbar-nav side-nav"">
            <li class="active">
                <a> Peges <i class="fa fa-fw fa-plus fa-2x "  data-toggle="modal" data-target="#myModal" style="float: right; cursor: pointer;"></i>
                    <i class="fa fa-fw fa-trash-o fa-2x " data-toggle="modal" data-target="#myModal1" style="float: right; cursor: pointer;"> </i>
                </a>
            </li>

            <? foreach($page as $key=>$pages){?>

                <? if (empty($pages->child)){?>
                    <li>
                      <a id="page<?=$pages->id?>" href="<?=$config->domain?>/page.php?id=<?=$pages->id?>"><?=$pages->caption?></a>
                    </li>
                <?} else{
                    if (checkDrop($pages->id)){?>
                        <li>
                            <a id="page<?=$pages->id?>" onclick="menu(<?=$pages->id?>)" href="javascript:;" style="cursor: pointer"   data-toggle="collapse" class="" id="test " data-target="#demo<?=$pages->id?>"> <?=$pages->caption?> <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo<?=$pages->id?>" class="collapse in">
                                <li>
                                    <a  id="page<?=$pages->id?>" href="<?=$config->domain?>/page.php?id=<?=$pages->id?>"><?=$pages->title?></a>
                                </li>
                                <? drawChild($pages->child)?>
                            </ul>
                        </li>

                   <?} else{?>
                        <li>
                            <a onclick="menu(<?=$pages->id?>)" href="javascript:;" style="cursor: pointer"   data-toggle="collapse" class="collapsed" id="test " data-target="#demo<?=$pages->id?>"> <?=$pages->caption?> <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo<?=$pages->id?>" class="collapse">
                                <li>
                                    <a href="<?=$config->domain?>/page.php?id=<?=$pages->id?>"><?=$pages->title?></a>
                                </li>
                                <? drawChild($pages->child) ?>
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

