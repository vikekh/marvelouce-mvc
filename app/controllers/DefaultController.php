<?php

class DefaultController extends Controller {

	public function __construct($title) {
		parent::__construct($title);
	}
	
	public function index() {
		require 'app/views/default/index.php';
	}
	
}