<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once("rest/dao/s2eDao.class.php");

$name = $_REQUEST['name'];
$surename = $_REQUEST['surename'];

$dao = new s2eDao();
$dao->add($name, $surename);
echo("inserted");
 ?>
