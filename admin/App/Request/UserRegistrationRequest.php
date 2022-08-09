<?php

namespace App\Request;

class UserRegistrationRequest
{

    public function registrationRequest()

        $data = [];

        if (isset($_POST['user_name']) && isset($_POST['user_lastname']) && isset($_POST['user_email']) && isset($_POST['user_password'])) {

            $data['name'] = $_POST['user_name'];
            $data['lastname'] = $_POST['user_lastname'];
            $data['email'] = $_POST['user_email'];
            $data['password'] = $_POST['user_password'];

            if (empty($_POST['user_name']) || empty($_POST['user_lastname']) || empty($_POST['user_email']) || empty($_POST['user_password'])) {
                $data['error'] = "Error, Please Fill all field";
                http_response_code(400);
            }

        } else {
            $data['error'] = "Error";
        }

        return $data;

    }

}