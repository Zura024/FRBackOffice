<?php
/**
 * Created by PhpStorm.
 * User: user1
 * Date: 01.02.2017
 * Time: 15:59
 */
/*$lnk = mysql_connect('localhost', 'root', '') or die('DB');
mysql_select_db('webapi', $lnk) or die('SEL');
mysql_set_charset('utf8', $lnk) or die('CHARSET');*/
$db = (Object)array(
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'db' => 'msg'

);


$conn = @mysql_connect($db->host,$db->username,$db->password);
@mysql_select_db($db->db,$conn);
@mysql_set_charset("utf8");
