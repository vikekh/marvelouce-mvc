<?php

require 'lib/Controller.php';
require 'lib/Model.php';

$controller = 'HelloWorldController';

if (isset($_GET['c']) && file_exists('app/controllers/' . $_GET['c'] . 'Controller.php'))
	$controller = $_GET['c'] . 'Controller';
	
require 'app/controllers/' . $controller . '.php';

$controller = new $controller('Hello World!');
$controller->head();
$controller->index();
$controller->feet();
