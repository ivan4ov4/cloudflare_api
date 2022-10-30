<?php

require 'vendor/autoload.php';

Flight::route('/', function(){
    $timeNow = date('H:i:s');
    $dateNow = date('Y-m-d');

    $response  = array(
        'http_code' => 200,
        'state' => 'UP',
        'date' => $dateNow,
        'time' => $timeNow
    );
    Flight::json($response);
});

Flight::map('error', function(Exception $ex){
    Flight::redirect('/');
});

Flight::map('notFound', function(){
    Flight::redirect('/');
});

Flight::start();


