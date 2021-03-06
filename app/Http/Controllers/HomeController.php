<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use App\Repositories\Eloquent\ProductInt;
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
    	$products = $this->repository->paginate(12);
        $products = $products->where('published', 1);
        
        return view('loja::page.home', compact('products'));
    }

}
