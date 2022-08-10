<?php

namespace App\Controller;

use App\Database\Product\UserRepository;
use App\Request\LoginRequest;

class AuthController
{
    protected $request;
    protected $repository;

    public function __construct()
    {

        $this->request = new LoginRequest();
        $this->repository = new UserRepository();

    }

    public function loginView()
    {
        require 'admin/view/pages/Login.php';
    }

    public function logIn()
    {
        $error = [];
        $data = $this->request->login();


        if (!isset($data['error'])) {

            $user = $this->repository->select($data['email']);

            if (!$user) {
                $error[] =  'wrong email';
            }
            if (empty($error) && !password_verify($data['password'],$user['user_password']) ) {
                $error[] = "Wrong Password";
            }

            if (empty($error)) {
                // create session
                $this->createSession($user);
                $data = "Success";
            } else {
                http_response_code(400);
                $data['error'] = $error;
            }

        }
        echo json_encode($data);
    }

    private function createSession($user){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['user_email'];
        $_SESSION['user_name'] = $user['user_name'];
        $_SESSION['user_lastname'] = $user['user_lastname'];

    }

    public function logOut(){

        if (session_destroy()){
            $data = 'Success';
        } else {
            http_response_code(400);
            $data['error'] = ['session could not be destroyed'];
        }

        echo json_encode($data);
    }




}