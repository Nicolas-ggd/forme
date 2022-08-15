<?php

namespace App\Controller;

use App\Database\Product\NewsCategoryRepository;
use App\Request\NewsCategoryRequest;

class NewsCategory
{

    protected $request;
    protected $repository;

    public function __construct()
    {

        $this->repository = new NewsCategoryRepository();
        $this->request = new NewsCategoryRequest();

    }

    public function category()
    {
        $newsCategory = $this->repository->select();
        require 'admin/view/pages/NewsCategory.php';
    }

    public function editCategoryView(){
        $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : false;

        if ($category_id){
            $category = $this->repository->select($category_id);

            require 'admin/view/pages/AddNewsCategory.php';
        }else{
            require "admin/view/pages/404Page.php";
        }

    }

    public function addSCategoryView(){
        require 'admin/view/pages/AddNewsCategory.php';
    }

    public function add(){
        $data = $this->request->newsCategoryRequest();

        if(!isset($data['error'])){
            $this->repository->insert($data['category']);
            $data = $data["Success"];
        } else {
            $data = 'Error';
        }

        echo json_encode($data);

    }

    public function  edit(){
        $data =  $this->request->newsCategoryRequest();

        $category_id = isset($_POST['category_id']) ?  $_POST['category_id'] : false;


        if (!isset($data['error'])) {

            $this->repository->update($data['id'], $data['category']);
            $data = "success message";

        } else {
            $data = $data['error'];
        }

        return json_encode($data);
    }

    public function delete(){
        $category_id = isset($_POST['category_id']) ?  $_POST['category_id'] : false;

        if ($category_id) {
            $this->repository->delete($category_id);
            $data = 'Success';
        } else {
            $data['error'] = 'Error';
        }

        echo json_encode($data);
    }

    public function massDelete(){
        $category_id = isset($_POST['check_productId']) ?  $_POST['check_productId'] : false;

        if ($category_id){

            if ($category_id && !isset($data['error'])) {
                $this->repository->massDelete($category_id);
                $data = 'Success';
            }
        }else{
            http_response_code(400);
            $data['error'] = "Error";
        }

        echo json_encode($data);
    }


}