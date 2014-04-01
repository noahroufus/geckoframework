<?php namespace Gecko\Core;

// Add routes here
Router::addRoute("index", new \Gecko\App\Index);

// Process route here
$disp = Router::$dispatch;
Router::processRoute($disp->getRoute(), $disp->getAction());

?>