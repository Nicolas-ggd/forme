<?php

namespace App\Controller;

use App\Request\UserRequest;

class UserController
{

    protected $request;
    protected $repository;

    public function __construct(){

        $this->request = new UserRequest();

    }

    public function profile(){
        require 'admin/view/pages/UserProfile.php';
    }

}