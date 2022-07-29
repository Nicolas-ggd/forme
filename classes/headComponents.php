<?php

// debugger to see errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$error = "";
$output = [];
$data = '';
require_once __DIR__."/database.php";
require_once "databaseFunction.php";