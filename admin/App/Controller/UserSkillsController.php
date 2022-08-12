<?php

namespace App\Controller;

use App\Database\Product\UserSkillsRepository;
use App\Request\UserSkillsRequest;

class UserSkillsController
{

    protected $request;
    protected $repository;

    public function __construct()
    {

        $this->repository = new UserSkillsRepository();
        $this->request = new UserSkillsRequest();

    }

    public function skills()
    {
        $userSkills = $this->repository->select();
        require 'admin/view/pages/UserSkills.php';
    }

    public function editSkillsView(){
        $skills_id = isset($_GET['skills_id']) ? $_GET['skills_id'] : false;

        if ($skills_id){
            $product = $this->repository->select($skills_id);

            require 'admin/view/pages/AddUserSkills.php';
        }else{
            require "admin/view/pages/404Page.php";
        }

    }

    public function addSkillsView(){
        require 'admin/view/pages/AddUserSkills.php';
    }

    public function add(){
        $data = $this->request->skillRequest();

        if(!isset($data['error'])){
            $this->repository->insert();
            $data = $data["Success"];
        } else {
            $data = 'Error';
        }

        echo json_encode($data);

    }

    public function  edit(){
        $data =  $this->request->skillRequest();

        $skills_id = isset($_POST['skills_id']) ?  $_POST['skills_id'] : false;

        if ($skills_id && !isset($data['error'])) {

            $this->repository->update($data['id'], $data['skills']);
            $data = "success message";

        } else {
            $data = $data['error'];
        }

        return json_encode($data);
    }

    public function delete(){
        $skills_id = isset($_POST['skills_id']) ?  $_POST['skills_id'] : false;

        if ($skills_id) {
            $this->repository->delete($skills_id);
            $data = 'Success';
        } else {
            $data = 'Error';
        }

        echo json_encode($data);
    }

    public function massDelete(){
        $skills_id = isset($_POST['check_productId']) ?  $_POST['check_productId'] : false;

        if ($skills_id){

            if ($skills_id && !isset($data['error'])) {
                $this->repository->massDelete($skills_id);
                $data = 'Success';
            }
        }else{
            http_response_code(400);
            $data['error'] = "Error";
        }

        echo json_encode($data);
    }

}