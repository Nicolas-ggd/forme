<?php

namespace App\Request;

class UserSkillsRequest
{

    public function skillRequest()
    {

        $data = [];

        if (isset($_POST['skills'])) {
            $data['id'] = $_POST['skills_id'];
            $data['skills'] = $_POST['skills'];

            if (empty($_POST['skills'])) {
                $data['error'] = "Error, Please choose skill(s)";
                http_response_code(400);
            }
        } else {
            $data['error'] = "Error";
        }
        return $data;
    }

}