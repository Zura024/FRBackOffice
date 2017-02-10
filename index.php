<?php
/**
 * Created by PhpStorm.
 * User: lakhs
 * Date: 2/5/2017
 * Time: 2:46 AM
 */
require_once 'config/db_congif.php';
require_once 'config/site_config.php';

require_once 'controller/MenuController.php';
require_once 'controller/PageController.php';

require_once  'model/MenuModel.php';
require_once  'model/AddPageModel.php';

require_once "fn/drawChild.php";
require_once 'inc/auth.inc.php';
require_once 'inc/menu.inc.php';
?>

<? include "view/header.php"?>

<div id="wrapper">

<? include "view/navbar.php"?>

<? include "view/index.content.php"?>

</div>

</body>

</html>