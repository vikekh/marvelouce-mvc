<?php

require 'src/Marvelouce/Controller.php';
require 'src/Marvelouce/Model.php';
require 'src/Marvelouce/Router.php';

$request = isset($_GET['request']) ? $_GET['request'] : null;
new Marvelouce\Router($request);