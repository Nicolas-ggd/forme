<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['product_name']) && isset($_POST['product_desc']) && isset($_POST['product_status'])) {

    $name = $_POST['product_name'];
    $status = $_POST['product_status'];
    $desc = $_POST['product_desc'];

        if (empty($_POST['product_name']) || empty($_POST['product_desc']) || empty($_POST['product_status'])) {
            $error = "ERROR, Please fill all field";
            http_response_code(400);
        }

} else {
    $error = "ERROR";
}