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
class router
{
    protected $routes=[];

    public function add($method,$uri,$controller){
        $this->routes[]=[
            'uri'=>$uri,
            'controller'=>$controller,
            'method'=> $method
        ];
    }
    public function post($uri,$controller){
        $this->add('POST',$uri,$controller);
    }
    public function get($uri,$controller){
        $this->add('GET',$uri,$controller);
    }
    public function delete($uri,$controller){
        $this->add('DELETE',$uri,$controller);
    }
    public function patch($uri,$controller){
        $this->add('PATCH',$uri,$controller);
    }
    public function put($uri,$controller){
        $this->add('PUT',$uri,$controller);
    }

    public function route($uri,$method){
        foreach ($this->routes as $route){
            if($route['uri']===$uri && $route['method']===strtoupper($method)){
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