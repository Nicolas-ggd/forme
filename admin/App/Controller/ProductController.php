<?php

namespace App\Controller;

use App\Database\Product\ProductRepository;
use App\Request\ProductRequest;

class ProductController
{
    protected $request;
    protected $repository;

    public function __construct(){

        $this->request = new ProductRequest();
        $this->repository = new ProductRepository();

    }

    public function index(){
        $products = $this->repository->select();
        require 'admin/view/homepage.php';
    }

    public function addView(){
         require 'admin/view/pages/AddProducts.php';
    }

    public function editView(){
        $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : false;

        if ($product_id){
            $product = $this->repository->select($product_id);

            require 'admin/view/pages/AddProducts.php';
        }else{
            require "admin/view/pages/404Page.php";
        }

    }

    public function add(){
        $data =  $this->request->validateRequest();

        if(!isset($data['error'])){
            $this->repository->insert($data['name'], $data['desc'], $data['price'], $data['status'], $data['time']);
            $data = $data["Success"];
        } else {
            $data = 'Error';
        }

        echo json_encode($data);

    }

    public function  edit(){
        $data =  $this->request->validateRequest();

        $product_id = isset($_POST['product_id']) ?  $_POST['product_id'] : false;

        if ($product_id && !isset($data['error'])) {

            $this->repository->update($data['id'], $data['name'], $data['desc'], $data['price'], $data['status'], $data['time']);
            $data = "success message";

        } else {
            $data = $data['error'];
        }

        return json_encode($data);
    }

    public function delete(){
        $product_id = isset($_POST['product_id']) ?  $_POST['product_id'] : false;

        if ($product_id) {
            $this->repository->delete($product_id);
            $data = 'Success';
        } else {
            $data = 'Error';
        }

        echo json_encode($data);
    }

    public function massDelete(){
        $product_id = isset($_POST['check_productId']) ?  $_POST['check_productId'] : false;

        if ($product_id){

            if ($product_id && !isset($data['error'])) {
                $this->repository->massDelete($product_id);
                $data = 'Success';
            }
        }else{
            http_response_code(400);
            $data['error'] = "Error";
        }

        echo json_encode($data);
    }
}