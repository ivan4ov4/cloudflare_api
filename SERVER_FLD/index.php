<?php

require 'vendor/autoload.php';

Flight::route('/', function(){

    $timeNow = date('Y-m-d H:i:s');


    echo 'hello world!';
    echo $timeNow;
});


Flight::start();


