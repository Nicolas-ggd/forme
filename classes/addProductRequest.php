<?php

// require headComponents which include debugger, variables(data, output, error), database and databaseFunctions.
require_once "headComponents.php";
require_once "requestFunction.php";

if(!$error){
    insert($name, $desc, $status);
    $data = "OK, All field is fill";
} else {
    $data = $error;
}

echo json_encode($data);
