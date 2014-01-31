<?php

require 'vendor/autoload.php';
use Vikekh\Marvelouce;
$request = isset($_GET['request']) ? $_GET['request'] : null;
new Router($request);