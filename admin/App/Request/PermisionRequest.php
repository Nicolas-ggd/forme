<?php

namespace App\Request;

class PermisionRequest
{

    public function userPermisionRequest(){
        $data = [];

        if (isset($_POST['user_permision'])) {
            $data['id'] = $_POST['permision_id'];
            $data['permision'] = $_POST['user_permision'];

            if (empty($_POST['user_permision'])) {
                $data['error'] = "Error, Please choose permision(s)";
                http_response_code(400);
            }
        } else {
            $data['error'] = "Error";
        }
        return $data;
    }

}