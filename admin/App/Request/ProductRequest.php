<?php

namespace App\Request;

class ProductRequest
{

    public function validateRequest()
    {
        $data = [];

        if (isset($_POST['product_name']) && isset($_POST['product_desc']) && isset($_POST['product_price']) && isset($_POST['product_status']) && isset($_POST['product_deadline'])) {
            $data['id'] = $_POST['product_id'];
            $data['name'] = $_POST['product_name'];
            $data['desc'] = $_POST['product_desc'];
            $data['price'] = $_POST['product_price'];
            $data['status'] = $_POST['product_status'];
            $data['time'] = $_POST['product_deadline'];

            if (empty($_POST['product_name']) || empty($_POST['product_desc']) || empty($_POST['product_price']) || empty($_POST['product_status']) || empty($_POST['product_deadline'])) {
                $data['error'] = "ERROR, Please fill all field";
                http_response_code(400);
            }
        } else {
            $data['error'] = "ERROR";
        }

        return $data;
    }

}