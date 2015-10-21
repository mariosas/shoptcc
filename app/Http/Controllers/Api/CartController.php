<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers\Api;
use App\Services\CartServices;
use App\Repositories\CartRepository;
use App\Http\Controllers\Controller;

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
    
    /**
     * 
     * @param type $id
     * @return type
     */
    public function addProductCart($id){
        $this->service->add($id, 1);
        return redirect('cart');
    }
    
    /**
     * 
     * @return type
     */
    public function getCart() {
        $carrinho = $this->repository->all();
        $total = $this->repository->total();
        $totalItens = $this->repository->countItens();
        return view('loja::page.cart', compact('carrinho', 'total', 'totalItens'));
    }
    
    /**
     * 
     * @return type
     */
    public function destroy(){
        $this->repository->destroy();
        return redirect('/');
    }

    /**
     * 
     * @param unknown $idProduct
     */
    public function remove($idProduct) {
    	$this->repository->remove($idProduct);
    	return redirect()->back();
    }
    
    /**
     * 
     * @param unknown $idProduct
     */
    public function updateQtd($idProduct, $tipo){
    	$product = $this->repository->find($idProduct);
    	
    	if($tipo == "increment") {
    		$value = ($product->qty + 1);
    	} else if ($tipo == "decrement") {
    		$value = ($product->qty - 1);
    	}
    	
    	$this->repository->updateQtd($idProduct, $value);
    	
    	return redirect()->back();
    }
    
    /**
     * 
     */
    public function checkout(){
    	$carrinho = $this->repository->all();
    	$total = $this->repository->total();
    	$totalItens = $this->repository->countItens();
    }
}
