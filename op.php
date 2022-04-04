<?php
ini_set('display_errors',1);
ini_set('log_errors',1);
error_reporting(E_ALL);
require_once("rest/dao/s2eDao.class.php");
$dao = new s2eDao();
$op = $_REQUEST['op'];

switch ($op) {
  case 'delete':
    $id = $_REQUEST['id'];
    $dao->delete($id);
    echo("deleted $id");
    break;
  case 'insert':
    $name = $_REQUEST['name'];
    $surename = $_REQUEST['surename'];
    $dao = new s2eDao();
    $dao->add($name, $surename);
    echo("inserted");
    break;
    case 'update':
      $id = $_REQUEST['id']
      $name = $_REQUEST['name'];
      $surename = $_REQUEST['surename'];
      $email = $_REQUEST['email'];
      $dao->update($id,$name, $surename, $email);
      echo("updated $id");
      break;
  default:
    $results = $dao->getAll();
    print_r($results);
    break;
}

 ?>
