<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Loja;
use App\Repositories\Eloquent\ProductInt;
use App\Http\Controllers\Controller;
/**
 * Description of ProductsController
 *
 * @author mario
 */
class ProductsController extends Controller{
    
    private $repository;
    
    public function __construct(ProductInt $products) {
        $this->repository = $products;
    }
    
    /**
     * 
     * @param type $id
     * @return type
     */
    public function show($id){
        $product = $this->repository->with(['reviews'])->find($id);
        return view('loja::page.details-product', compact('product'));
    }
}
