<?php

namespace App\Controller;

use App\Database\Product\UserRepository;
use App\Request\LoginRequest;

class LoginController
{
    protected $request;
    protected $repository;

    public function __construct(){

        $this->request = new LoginRequest();
        $this->repository = new UserRepository();

    }

    public function createView(){
        require 'admin/view/pages/CreateAccount.php';
    }

    public function ligin(){
        $data = $this->request->loginRequest();

        if(!isset($data['error'])){
            $this->repository->insert($data['name'], $data['lastname'], $data['email'], $data['password']);
            $data = "Success";
        } else {
            $data = $data['error'];
        }

        echo json_encode($data);

    }

}