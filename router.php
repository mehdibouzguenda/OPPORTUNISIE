<?php

$uri = $_SERVER['REQUEST_URI'];

$routes = [
    '/BidenBU/' => 'controller/index.php',
    '/BidenBU/index.php' => 'controller/index.php',
    '/BidenBU/candidate.php' => 'controller/candidate.php',
    '/BidenBU/Reclamation.php' => 'controller/Reclamation.php', // Route Reclamation.php for all reclamation-related requests

    '/BidenBU/job.php' => 'controller/job.php',
    '/BidenBU/job-details.php' => 'controller/job-details.php',
    '/BidenBU/login.php' => 'controller/login.php',
    '/BidenBU/register.php' => 'controller/register.php',
];

function abord($code = 404)
{
    http_response_code($code);
    require("views/404.php");
    die();
}

function routeToController($uri, $routes)
{
    // Extract the path from the URI (excluding query parameters)
    $path = parse_url($uri, PHP_URL_PATH);

    // Check if the path exists in the routes array
    if (array_key_exists($path, $routes)) {
        // If yes, require the corresponding controller file
        require $routes[$path];
    } else {
        // If no matching path found, handle it as a search request
        // For example, if '/BidenBU/reclamation.php' is requested with a search query,
        // we'll route it to the Reclamation.php controller
        if ($path === '/BidenBU/reclamation.php' && isset($_GET['search'])) {
            require $routes['/BidenBU/Reclamation.php'];
        } else {
            // If it's neither a defined route nor a search request, return a 404 response
            abord();
        }
    }
}

routeToController($uri, $routes);
