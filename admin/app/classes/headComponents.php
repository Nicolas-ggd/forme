<?php

// debugger to see errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// create variables which used to return response answer
$error = "";
$output = [];
$data = '';

// require database
require_once __DIR__ . "/database.php";
// require databaseFunction
require_once "productFunction.php";