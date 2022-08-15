<?php

namespace App\Request;

class NewsRequest
{

    public function newsRequest()
    {
        $data = [];

        if (isset($_POST['news_title']) && isset($_POST['news_desc']) && isset($_POST['news_image']) && isset($_POST['news_author']) && isset($_POST['publication_date'])) {
            $data['id'] = $_POST['news_id'];
            $data['title'] = $_POST['news_title'];
            $data['desc'] = $_POST['news_desc'];
            $data['image'] = $_POST['news_image'];
            $data['author'] = $_POST['news_author'];
            $data['time'] = $_POST['publication_date'];

            if (empty($_POST['news_title']) || empty($_POST['news_desc']) || empty($_POST['news_image']) || empty($_POST['news_author']) || empty($_POST['publication_date'])) {
                $data['error'] = "ERROR, Please fill all field";
                http_response_code(400);
            }
        } else {
            $data['error'] = "ERROR";
        }

        return $data;
    }

}