<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use App\Services\CartServices;
use App\Repositories\CartRepository;

/**
 * Description of CartController
 *
 * @author mario
 */
class CartController extends Controller {
    
    private $service;
    private $repository;
    
    public function __construct(CartServices $service, CartRepository $cart) {
        $this->service = $service;
        $this->repository = $cart;
    }
    
    
    public function addProductCart($id){
        $this->service->add($id, 1);
    }
    
    public function getCart() {
        return $this->repository->all();
    }
}
