<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Loja;

use App\Repositories\Eloquent\ProductInt;
use App\Http\Controllers\Controller;
use App\Repositories\Eloquent\CategoryInt;

/**
 * Description of HomeController
 *
 * @author mario
 */
class HomeController extends Controller {

    private $repository;
    private $repositoryCat;

    public function __construct(ProductInt $products, CategoryInt $category) {
        $this->repository = $products;
        $this->repositoryCat = $category;
    }

    public function home() {
        $products = $this->repository->with('reviews')->findWhere(['published' => 1]);

       //$categoria = $this->repositoryCat->with('subcategory')->findWhere(['published' => 1]);

        return view('loja::page.home', compact('products'));
    }

}
