<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once("rest/dao/s2eDao.class.php");

$id = $_REQUEST['id']
$name = $_REQUEST['name'];
$surename = $_REQUEST['surename'];
$email = $_REQUEST['email'];


$dao = new s2eDao();
$dao->update($id,$name, $surename, $email);


echo("updated $id");
 ?>
