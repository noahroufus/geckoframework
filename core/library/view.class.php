<?php namespace Gecko\App;

class View {
    public static function render($action) {
        global $routes;

        $disp = \Gecko\Core\Router::$dispatch;

        $route = $disp->getRoute();

        $contents = "";
        ob_start();
            require_once APP_ROOT . \Gecko\Core\Dispatch::$appConfig["app"] . DS . "views" . DS . $route . DS . $action . ".view.php";

            $contents = ob_get_contents();
        ob_end_clean();

        echo $contents;
    }
};

?>