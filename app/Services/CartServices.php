<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Services;
use App\Repositories\CartInt;

/**
 * Description of CartServices
 *
 * @author mario
 */
class CartServices {
    
    private $repository;
    
    public function __construct(CartInt $cart) {
        $this->repository = $cart;
    }
    
    public function add($id, $qtd){
        //Validar
        $this->repository->add($id, $qtd);
    }
    
    public function find($key) {
        if($key != null) {
            if($this->repository->exists($key)){
                return $this->repository->find($key);
            }
        }
    }
    
    public function delete($key) {
        if($key != null) {
            if($this->repository->exists($key)){
                $this->repository->delete($key);
            }
        }
    }
}
