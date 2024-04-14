
<?php
require 'core/functions.php';
//require 'core/container.php';
//require 'core/App.php';
//require 'core/router.php';
spl_autoload_register(function ($class){
    //dd($class);
    $result=str_replace('\\',DIRECTORY_SEPARATOR,$class);
    require $result.'.php';
});
require 'bootstrap.php';
//require 'Database.php';
//require 'core/router.php';

$router = new \core\router();
$routes = require 'routes.php';
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method= $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
$router->route($uri,$method);