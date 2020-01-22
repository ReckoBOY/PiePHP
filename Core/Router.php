<?php 
namespace Core;

class Router
{
    private static $routes;
    public static function connect ($url, $route) {
    self::$routes[$url] = $route;
    }
    
    public static function get () {
        $test = strlen(BASE_URI);

        $url = substr($_SERVER['REDIRECT_URL'],$test);
        // var_dump($url);
        return self::$routes[$url];
    }
}