<?php

use App\Database\Product\ProductRepository;


class DeleteOverdueProduct
{
    protected $request;
    protected $repository;

    public function __construct(){

        $this->repository = new ProductRepository();

    }

    public function deleteOverdueProduct(){
        $this->repository->deleteOverdueProduct();
    }
}