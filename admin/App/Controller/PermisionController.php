<?php

namespace App\Controller;

use App\Database\Product\PermisionRepository;
use App\Request\PermisionRequest;

class PermisionController
{

    protected $request;
    protected $repository;

    public function __construct()
    {

        $this->repository = new PermisionRepository();
        $this->request = new PermisionRequest();
    }

    public function permisionView(){
        $userPermision = $this->repository->select();
        require 'admin/view/pages/Permision.php';
    }

    public function editPermisionView(){
        $permision_id = isset($_GET['permision_id']) ? $_GET['permision_id'] : false;

        if ($permision_id){
            $permision = $this->repository->select($permision_id);

            require 'admin/view/pages/AddUserPermision.php';
        }else{
            require "admin/view/pages/404Page.php";
        }

    }

    public function addPermisionView(){
        require 'admin/view/pages/AddUserPermision.php';
    }

    public function add(){
        $data = $this->request->userPermisionRequest();

        if(!isset($data['error'])){
            $this->repository->insert($data['permision']);
            $data = $data["Success"];
        } else {
            $data = 'Error';
        }

        echo json_encode($data);

    }

    public function  edit(){
        $data =  $this->request->userPermisionRequest();

        $permision_id = isset($_POST['permision_id']) ?  $_POST['permision_id'] : false;

        if ($permision_id && !isset($data['error'])) {

            $this->repository->update($data['id'], $data['permision']);
            $data = "success message";

        } else {
            $data = $data['error'];
        }

        return json_encode($data);
    }

    public function delete(){
        $permision_id = isset($_POST['permision_id']) ?  $_POST['permision_id'] : false;

        if ($permision_id) {
            $this->repository->delete($permision_id);
            $data = 'Success';
        } else {
            $data['error'] = 'Error';
        }

        echo json_encode($data);
    }

    public function massDelete(){
        $permision_id = isset($_POST['check_productId']) ?  $_POST['check_productId'] : false;

        if ($permision_id){

            if ($permision_id && !isset($data['error'])) {
                $this->repository->massDelete($permision_id);
                $data = 'Success';
            }
        }else{
            http_response_code(400);
            $data['error'] = "Error";
        }

        echo json_encode($data);
    }


}