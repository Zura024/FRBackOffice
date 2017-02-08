<?php
/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 4:46 AM
 */
require_once 'config/db_congif.php';
require_once 'config/site_config.php';

require_once 'model/AddPageModel.php';
require_once 'controller/PageController.php';
require_once 'model/PageModel.php';
require_once 'controller/MenuController.php';
require_once 'model/MenuModel.php';
require_once 'model/redirectModel.php';

require_once "fn/drawChild.php";
require_once 'inc/auth.inc.php';
require_once 'inc/page.inc.php';
require_once 'router/redirect.php';
?>

<? include "view/header.php"?>

<div id="wrapper">

    <? include "view/navbar.php"?>

    <? include "view/content.php" ?>

</div>

</body>

</html>
