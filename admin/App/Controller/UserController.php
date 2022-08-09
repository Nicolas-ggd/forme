<?php

namespace App\Controller;

use App\Database\Product\UserRepository;
use App\Request\UserRegistrationRequest;

class UserController
{
    protected $request;
    protected $repository;

    public function __construct(){

        $this->request = new UserRegistrationRequest();
        $this->repository = new UserRepository();

    }

    public function createView(){
        $users = $this->repository->select();
        require 'admin/view/pages/CreateAccount.php';
    }

    public function add(){
        $data = $this->request->registrationRequest();

        if(!isset($data['error'])){
            $this->repository->insert($data['name'], $data['lastname'], $data['email'], $data['password']);
            $data = $data["Success"];
        } else {
            $data = 'Error';
        }

        echo json_encode($data);

    }

    public function  edit(){
        $data =  $this->request->registrationRequest();

        $user_id = isset($_POST['user_id']) ?  $_POST['user_id'] : false;

        if ($user_id && !isset($data['error'])) {

            $productRepository->update($data['name'], $data['lastname'], $data['email'], $data['password']);
            $data = $data['Success'];

        } else {
            $data = $data['Error'];
        }

        return json_encode($data);
    }

    public function delete(){
        $user_id = isset($_POST['user_id']) ?  $_POST['user_id'] : false;

        if ($user_id) {
            $this->repository->delete($user_id);
            $data = 'Success';
        } else {
            $data = 'Error';
        }

        echo json_encode($data);
    }
}