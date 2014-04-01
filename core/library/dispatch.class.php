<?php namespace Gecko\Core;

class Dispatch {

    private $requestUri;
    public static $appConfig;
    private $route = "index";
    private $action = "home";
    private $controller = null;

    public function __construct() {
        Dispatch::$appConfig = json_decode(file_get_contents(SYS_ROOT . "app.conf.json"), true);
    }
    public function __destruct() {}

    public function Request(array $request) {
        $this->requestUri = explode("/", trim($request["REQUEST_URI"], "/"));

        if(isset($this->requestUri[0]) && !empty($this->requestUri[0])) {
            $this->route = $this->requestUri[0];
        }

        if(isset($this->requestUri[1]) && !empty($this->requestUri[1])) {
            $this->action = $this->requestUri[1];
        }

        require_once APP_ROOT . Dispatch::$appConfig["app"] . DS . "routes.php";
    }

    public function getRoute() {
        return $this->route;
    }

    public function getAction() {
        return $this->action;
    }

    public function setController($controller) {
        $this->controller = $controller;
    }

    public function getController() {
        return $this->controller;
    }

};

?>