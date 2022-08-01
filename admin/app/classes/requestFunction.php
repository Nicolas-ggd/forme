<?php

// Debugger
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// check if isset or not
if (isset($_POST['product_name']) && isset($_POST['product_desc']) && isset($_POST['product_status']) && isset($_POST['product_deadline'])) {

    $name = $_POST['product_name'];
    $status = $_POST['product_status'];
    $desc = $_POST['product_desc'];
    $time = $_POST['product_deadline'];

        // check if post variable is empty or not
        if (empty($_POST['product_name']) || empty($_POST['product_desc']) || empty($_POST['product_status']) || empty($_POST['product_deadline'])) {
            $error = "ERROR, Please fill all field";
            http_response_code(400);
        }

} else {
    $error = "ERROR";
}