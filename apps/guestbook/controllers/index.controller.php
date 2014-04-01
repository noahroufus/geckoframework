<?php namespace Gecko\App;

class Index extends BaseController {
    public function __construct() {
        $this->setTitle("Guestbook");
    }

    public function __destruct() {

    }

    public function home() {
        View::render("home");
    }
};

?>