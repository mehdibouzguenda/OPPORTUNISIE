<?php


//$uri = $_SERVER['REQUEST_URI'];
//
//$routes = require 'routes.php';
//function abord($code = 404)
//{
//    http_response_code($code);
//    require("views/404.php");
//    die();
//}
//
//function routeToController($uri, $routes)
//{
//    if (array_key_exists($uri, $routes)) {
//        require $routes[$uri];
//    } else {
//        abord();
//    }
//}
//
//routeToController($uri, $routes);

namespace core;
use core\Middeware\Guest;
use core\Middeware\Auth;
use core\Middeware\Middleware;

class router
{
    protected $routes=[];

    public function add($method,$uri,$controller){
        $this->routes[]=[
            'uri'=>$uri,
            'controller'=>$controller,
            'method'=> $method,
            'middleware'=> null
        ];
        return $this;
    }
    public function post($uri,$controller){
        return $this->add('POST',$uri,$controller);
    }
    public function get($uri,$controller){
        return $this->add('GET',$uri,$controller);
    }
    public function delete($uri,$controller){
        return $this->add('POST',$uri,$controller);
    }
    public function patch($uri,$controller){
        return $this->add('PATCH',$uri,$controller);
    }
    public function put($uri,$controller){
        return $this->add('PUT',$uri,$controller);
    }
    public function only($key){
        $this->routes[array_key_last($this->routes)]['middleware']=$key;
    }
    public function route($uri,$method){
        foreach ($this->routes as $route){
            if($route['uri']===$uri && $route['method']===strtoupper($method)){

                Middleware::resolve($route['middleware']);
//                if($route['middleware']) {
//                    $middleware=Middleware::MAP[$route['middleware']];
//                    (new Middleware)->handle();
//                 }
//                if ($route['middleware']==='guest'){
//                    (new Guest)->handle();
//
//                }
//                if ($route['middleware']==='auth'){
//                    (new Auth)->handle();
//                }
                return require $route['controller'];
            }
        }
        $this->abord();
    }
    protected function abord($code = 404)
    {
        http_response_code($code);
        require("views/{$code}.php");
        die();
    }

}