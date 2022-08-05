<?php

// require headComponents which include debugger, variables(data, output, error), database and databaseFunctions.
require_once "headComponents.php";

$product_id = isset($_POST['check_productId']) ?  $_POST['check_productId'] : false;

if ($product_id){

    if ($product_id && !$error) {
        massDelete($product_id);
        $data = 'Success';
    }
}else{
    http_response_code(400);
    $data = "wtf bro";
}

echo json_encode($data);