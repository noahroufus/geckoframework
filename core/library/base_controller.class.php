<?php namespace Gecko\App;

abstract class BaseController {
    private $pageTitle;

    public abstract function __construct();
    public abstract function __destruct();

    public function getTitle() {
        return $this->pageTitle;
    }

    public function setTitle($title) {
        $this->pageTitle = $title;
    }
}

?>