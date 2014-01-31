<?php

namespace Vikekh\Marvelouce;

class Router {
	public function __construct($request) {
		$route = explode('/', $request);
		require 'app/controllers/HelloWorldController.php';
		$controller = new HelloWorldController('Hello world!');
		$controller->index();
	}
}