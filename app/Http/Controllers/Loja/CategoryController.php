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
 * Description of CategoryController
 *
 * @author mario
 */
class CategoryController extends Controller {

    private $repository;

    public function __construct(ProductInt $products) {
        $this->repository = $products;
    }

    public function show($id) {
        $products = $this->repository->findWhere(['categories_id' => $id, 'published' => 1]);
        return view('loja::page.category', compact('products'));
    }

    public function show1($idCategoria, $idSubCategoria) {
        $products = $this->repository->findWhere(['categories_id' => $idCategoria, 'sub_category_id' => $idSubCategoria, 'published' => 1]);
        return view('loja::page.category', compact('products'));
    }

}
