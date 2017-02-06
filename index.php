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
require_once 'controller/loginController.php';
require_once 'controller/RedirectController.php';

require_once 'model/redirectModel.php';
require_once 'model/adminUserModel.php';
require_once  'model/MenuModel.php';

require_once "fn/drawChild.php";
require_once 'inc/auth.inc.php';
require_once 'inc/menu.inc.php';
require_once 'inc/redirect.inc.php';
?>

<? include "view/header.php"?>

<div id="wrapper">

<? include "view/navbar.php"?>

<? include "view/index.content.php"?>
</div>

</body>

</html>