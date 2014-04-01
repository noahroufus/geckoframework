<?php namespace Gecko\App;

class Error extends BaseController {
	public function __construct() {}
	public function __destruct() {}

	public function home() {
		View::render("home");
	}
}

?>