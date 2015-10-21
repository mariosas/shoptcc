<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Api;

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
    	header ( 'Access-Control-Allow-Origin: *' );
    	header ( 'Access-Control-Allow-Methods: GET, POST, OPTIONS' );
    	header ( 'Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With' );
    	header ( 'Access-Control-Allow-Credentials: true' );
        $this->repository = $products;
    }

    public function show($id) {
        $products = $this->repository->findWhere(['categories_id' => $id, 'published' => 1]);
        return response()->json($products, 200);
        //return view('loja::page.category', compact('products'));
    }

    public function show1($idCategoria, $idSubCategoria) {
        $products = $this->repository->findWhere(['categories_id' => $idCategoria, 'sub_category_id' => $idSubCategoria, 'published' => 1]);
        return $products;
        //return view('loja::page.category', compact('products'));
    }

}
