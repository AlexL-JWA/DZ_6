<?php
namespace ZabaraIndustry\Framework;

class Router
{
    protected static array $routes = [];
    protected static array $route = [];

    public static function add(string $url, array $route = []): void
    {
        self::$routes[$url] = $route;
    }

    public static function dispatch(string $url)
    {
        if (!self::$routes[$url]) {
            http_response_code(404);
            include '404.html';
        }

        $controller = self::$routes[$url][0];

        if (!class_exists($controller)) {
            return 'Controller ' . $controller . ' Not Found';
        }

        $cObj = new $controller();

        $action = self::$routes[$url][1];

        if (method_exists($cObj, $action)) {
            $cObj->$action();
        } else {
            return '<br>Action ' . $action . ' is not Found';
        }
    }
}