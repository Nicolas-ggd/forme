<?php

namespace App\Controller;

use App\Database\Product\NewsRepository;
use App\Request\NewsRequest;

class NewsController
{

    protected $request;
    protected $repository;

    public function __construct()
    {

        $this->repository = new NewsRepository();
        $this->request = new NewsRequest();

    }

    public function news()
    {
        $news = $this->repository->select();
        require 'admin/view/pages/News.php';
    }

    public function editNewsView(){
        $news_id = isset($_GET['news_id']) ? $_GET['news_id'] : false;

        if ($news_id){
            $new = $this->repository->select($news_id);

            require 'admin/view/pages/AddNews.php';
        }else{
            require "admin/view/pages/404Page.php";
        }

    }

    public function addNewsView(){
        require 'admin/view/pages/AddNews.php';
    }

    public function add(){
        $data = $this->request->newsRequest();

        if(!isset($data['error'])){
            $this->repository->insert($data['title'], $data['desc'], $data['image'], $data['author'], $data['time']);
            $data = $data["Success"];
        } else {
            $data = 'Error';
        }

        echo json_encode($data);

    }

    public function  edit(){
        $data =  $this->request->newsRequest();

        $news_id = isset($_POST['news_id']) ?  $_POST['news_id'] : false;

        if ($news_id && !isset($data['error'])) {

            $this->repository->update($data['id'], $data['title'], $data['desc'], $data['image'], $data['author'], $data['time']);
            $data = "success message";

        } else {
            $data = $data['error'];
        }

        return json_encode($data);
    }

    public function delete(){
        $news_id = isset($_POST['news_id']) ?  $_POST['news_id'] : false;

        if ($news_id) {
            $this->repository->delete($news_id);
            $data = 'Success';
        } else {
            $data['error'] = 'Error';
        }

        echo json_encode($data);
    }

    public function massDelete(){
        $news_id = isset($_POST['check_productId']) ?  $_POST['check_productId'] : false;

        if ($news_id){

            if ($news_id && !isset($data['error'])) {
                $this->repository->massDelete($news_id);
                $data = 'Success';
            }
        }else{
            http_response_code(400);
            $data['error'] = "Error";
        }

        echo json_encode($data);
    }

}