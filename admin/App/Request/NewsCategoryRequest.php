<?php

namespace App\Request;

class NewsCategoryRequest
{

    public function newsCategoryRequest(){

        $data = [];

        if (isset($_POST['news_category'])) {
            $data['id'] = $_POST['category_id'];
            $data['category'] = $_POST['news_category'];

            if (empty($_POST['news_category'])) {
                $data['error'] = "Error, Please fill category field";
                http_response_code(400);
            }
        } else {
            $data['error'] = "Error";
        }
        return $data;

    }

}