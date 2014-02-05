<?php

/* $request = isset($_GET['request']) ? $_GET['request'] : null;
new Router($request); */

error_reporting(E_ALL);

require 'src/Controller.php';
require 'src/Router.php';

new Router();