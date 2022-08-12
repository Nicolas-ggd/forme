<?php

namespace App\Controller;

use App\Request\UserRequest;
use App\Database\Product\UserRepository;

class UserController
{

    protected $request;
    protected $repository;

    public function __construct(){

        $this->request = new UserRequest();
        $this->repository = new UserRepository();

    }

    public function profile(){
        require 'admin/view/pages/UserProfile.php';
    }

    public function getAllUsers(){
        $getUsers = $this->repository->select();
        require 'admin/view/pages/UsersPage.php';

    }

    public function countAll(){
        $countUsers = $this->repository->countAllUsers();
        require 'admin/view/pages/Index.php';
    }

}