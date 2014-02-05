<?php

class Router {

	public function __construct() {
		$path = array_values(array_filter(explode('/', isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : null)));

		$controller_name = null;

		if (count($path) > 0) {
			$controller_name = self::snakeToPascalCase($path[0]) . 'Controller';
		} else {
			$controller_name = 'DefaultController';
		}
		
		require 'app/controllers/' . $controller_name . '.php';

		$controller = new $controller_name('foo');
		$method = 'index';
		$args = array();

		if (count($path) > 1) {
			$method = self::snakeToPascalCase($path[1]);
		}

		if (count($path) > 2) {
			$args = array_values(array_slice($path, 2));
		}

		call_user_func_array(array($controller, $method), $args);
	}

	private static function snakeToPascalCase($snake) {
		return str_replace(' ', '', ucwords(str_replace('_', ' ', $snake)));
	}

}