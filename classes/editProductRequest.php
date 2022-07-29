<?php

// require headComponents which include debugger, variables(data, output, error), database and databaseFunctions.
require_once "headComponents.php";
require_once "requestFunction.php";

$product_id = isset($_POST['product_id']) ?  $_POST['product_id'] : false;

if ($product_id && !$error) {
    update($product_id, $name, $desc, $status);
    $data = 'success';
} else {
    $data = $error;
}

echo json_encode($data);