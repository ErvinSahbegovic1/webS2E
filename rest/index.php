<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
require_once 'dao/s2eDao.class.php';

Flight::route('/users', function(){
    $dao = new s2eDao();
    $allUsers = $dao->getAll();
    flight::json($allUsers);
});

Flight::route('/users/@id', function($id){
    $dao = new s2eDao();
    $singleUser = $dao->getById($id);
    flight::json($singleUser);
});
Flight::start();
 ?>
