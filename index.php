<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once("rest/dao/s2eDao.class.php");
$dao = new s2eDao();
$results = $dao->getAll();
print_r($results);
echo("workin");

 ?>
