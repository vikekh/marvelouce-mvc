<?php

namespace Marvelouce;

class Router {
	public function __construct($request) {
		$route = explode('/', $request);
	}
}