<?php namespace Gecko\Core;

$routes = array();

class Router {
    public static $dispatch;

    public static function addRoute($uri, $class) {
        global $routes;

        $routes[] = array($uri, $class);
    }

    public static function processRoute($uri, $act) {
        global $routes;

        foreach($routes as $route) {
            if ($route[0] == $uri) {

                $disp = Router::$dispatch;

                $disp->setController($route[1]);

                $controller = $disp->getController();
                $controller->{$disp->getAction()}();
            }
        }
    }
};

?>