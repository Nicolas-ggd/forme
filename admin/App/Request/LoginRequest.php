<?php

namespace App\Request;

class LoginRequest
{

    public function login()
    {
        $data = [];
        $error = [];

        if (!isset($_POST['user_email']) || empty($_POST['user_email'])) {
            $error[] = "Email is needed";
        }
        if (!isset($_POST['user_password']) || empty($_POST['user_password'])) {
            $error[] = "Password is needed";
        }

        if (empty($error)) {
            $data['email'] = $_POST['user_email'];
            $data['password'] = $_POST['user_password'];
        } else {
            $data['error'] = $error;
            http_response_code(400);
        }
        return $data;
    }



}