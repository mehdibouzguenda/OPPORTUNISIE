<?php


$uri=$_SERVER['REQUEST_URI'];

$routes=[
    '/BidenBU/' => 'controller/index.php',
    '/BidenBU/index.php' => 'controller/index.php',
    '/BidenBU/candidate.php' => 'controller/candidate.php',
    '/BidenBU/Reclamation.php' => 'controller/Reclamation.php',
    '/BidenBU/job.php' => 'controller/job.php',
    '/BidenBU/job-details.php' => 'controller/job-details.php',
    '/BidenBU/login.php' => 'controller/login.php',
    '/BidenBU/register.php' => 'controller/register.php',
];
function abord($code=404){
    http_response_code($code);
    require("views/404.php");
    die();
}

function routeToController($uri,$routes){
    if(array_key_exists($uri,$routes)){
        require $routes[$uri];
    }else{
        abord();
    }
}

routeToController($uri,$routes);