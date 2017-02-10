<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 01.02.2017
 * Time: 14:42
 */
if(!empty($_GET)&&($_GET['status'])){

    if ($_GET['status']==-2){
        $response="Sorry, you account is disabled";
    }
    if ($_GET['status']==-1){
        $response="Username or Password is incorrect";
    }
    if ($_GET['status']==-3){
        $response="Incorrect Username format";
    }

}
?>
<?require_once "config/site_config.php";?>
<?require_once "config/db_congif.php";?>

<?require_once 'controller/loginController.php' ?>
<? require_once 'model/adminUserModel.php' ?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="zura tevdoradze">
    <title>Back office</title>
    <link rel="stylesheet" type="text/css" href="rsc/css/login.css">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <script src=""></script>
</head>
<body>


<div class="container">
    <div class="card card-container">
        <p id="profile-name" class="profile-name-card"><? if (isset($response)){?><?=$response?><?}?></p>
        <br>
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <form class="form-signin" action="controller/loginController.php" method="post">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" autocomplete="off" required autofocus>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
            <button style="cursor: pointer" class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
        </form>
    </div>
</div>
</body>
</html>