<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);


require_once '../vendor/autoload.php';
require_once 'dao/s2eDao.class.php';
Flight::register('daoFlight', 's2eDao');


Flight::route('GET /users', function(){
    $allUsers = Flight::daoFlight()->getAll();
    flight::json($allUsers);
});

Flight::route('GET /users/@id', function($id){
    $singleUser = Flight::daoFlight()->getById($id);
    flight::json($singleUser);
});

Flight::route('POST /users', function(){
    // Flight::json(Flight::daoFlight()->add(Flight::request()->data->getData()));
    $request = Flight::request();
    $data = $request->data->getData();
    $user = Flight::daoFlight()->add($data);
    Flight::json($user);
});

  Flight::route('DELETE /users/@id', function($id){
      Flight::daoFlight()->delete($id);
      Flight::json(["message" => "deleted ID: $id"]);
  });

  Flight::route('PUT /users/@id', function($id){
      $data = Flight::request()->data->getData();
      $data['id']=$id;
      Flight::daoFlight()->update($data);
      Flight::json($data);
  });


Flight::start();
 ?>
