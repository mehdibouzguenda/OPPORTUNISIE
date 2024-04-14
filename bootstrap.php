<?php

use core\container;
use core\Database;
use core\App;

$container=new container();

$container->bind('core\Database',function (){
    $config= require('config.php');
    $db=new Database($config['database']);
});

//$db=$container->resolve('core\Database');

App::setContainer($container);

