<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Admin;
use App\Repositories\Eloquent\CategoryInt;
use App\Http\Controllers\Controller;

/**
 * Description of CategoryController
 *
 * @author mario
 */
class CategoryController extends Controller{
    
    private $repository;
    
    public function __construct(CategoryInt $category) {
        $this->repository = $category;
    }
    
    /**
     * 
     * @param type $id
     * @return type
     */
    public function index(){
        $categories = $this->repository->all();
        return view('painel.page.categorias', compact('categories'));
    }
    
    public function edit($id){
    	$product = $this->repository->with(['reviews'])->find($id);
    	return view('painel.page.edit-product', compact('product'));
    }
}
