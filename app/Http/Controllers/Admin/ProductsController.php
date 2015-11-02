<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Admin;
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
    public function index(){
        $products = $this->repository->with(['reviews'])->all();
        return view('painel.page.products', compact('products'));
    }
    
    public function edit($id){
    	$product = $this->repository->with(['reviews'])->find($id);
    	return view('painel.page.edit-product', compact('product'));
    }
}
