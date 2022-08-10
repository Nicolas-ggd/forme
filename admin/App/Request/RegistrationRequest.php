<?php

namespace App\Request;

class RegistrationRequest
{
    public function createRequest()
    {

        $data = [];
        $error = [];

        if (!isset($_POST['user_name']) || empty($_POST['user_name'])){
            $error[] = "Username is needed";
        }

        if (!isset($_POST['user_lastname']) || empty($_POST['user_lastname'])){
            $error[] = "Lastname is needed";
        }

        if (!isset($_POST['user_email']) || empty($_POST['user_email'])){
            $error[] = "Email is needed";
        }

        if (!isset($_POST['user_password']) || empty($_POST['user_password'])){
            $error[] = "Password is needed";
        }

        if (!isset($_POST['user_password']) || empty($_POST['user_password'])){
            $error[] = "Password is needed";
        }

        if (!isset($_POST['reenter_password']) || empty($_POST['reenter_password'])){
            $error[] = "Re-enter Password is needed";
        }

        if (empty($error) && $_POST['user_password'] !== $_POST['reenter_password']){
            $error[] = "Password dont match";
        }

        if (empty($error)) {

            $data['name'] = $_POST['user_name'];
            $data['lastname'] = $_POST['user_lastname'];
            $data['email'] = $_POST['user_email'];
            $password = $_POST['user_password'];
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $data['password'] = $hashed_password;

        } else {
            $data['error'] = $error;
            http_response_code(400);
        }

        return $data;

    }
}