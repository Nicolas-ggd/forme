<?php

// require headComponents which include debugger, variables(data, output, error), database and databaseFunctions.
require_once "headComponents.php";
// require requestFunction which include checking variables and response answer
require_once "requestFunction.php";

if(!$error){
    insert($name, $desc, $status, $time);
    $data = "All field is fill";
} else {
    $data = $error;
}

echo json_encode($data);
