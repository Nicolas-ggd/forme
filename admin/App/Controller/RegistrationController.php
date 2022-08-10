<?php

namespace App\Controller;

use App\Database\Product\UserRepository;
use App\Request\RegistrationRequest;

class RegistrationController
{
    protected $request;
    protected $repository;

    public function __construct(){

        $this->request = new RegistrationRequest();
        $this->repository = new UserRepository();

    }

    public function createView(){
        require 'admin/view/pages/CreateAccount.php';
    }

    public function registration(){
        $data = $this->request->createRequest();

        if(!isset($data['error'])){
            $this->repository->insert($data['name'], $data['lastname'], $data['email'], $data['password']);
            $data = "Success";
        }

        echo json_encode($data);

    }

}