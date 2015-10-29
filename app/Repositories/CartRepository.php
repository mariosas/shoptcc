<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Repositories\Eloquent\ProductInt;

/**
 * Description of CartRepository
 *
 * @author mario
 */
class CartRepository implements CartInt {

    private $request;
    private $product;

    public function __construct(Request $request, ProductInt $product) {
        $this->request = $request;
        $this->product = $product;
    }

    /**
     * add new product at car
     * @param type $id
     * @param type $qtd
     */
    public function add($id, $qtd) {
        $product = $this->product->find($id);
        \Cart::add($product->id, $product->name, $qtd, $product->pricing, array('icon' => $product->icon 
		) );
		
		$obj = array (
				'itemId1' => '0001',
				'itemDescription1' => 'Notebook Prata 1as',
				'itemQuantity1' => '1',
				'itemAmount1' => '12.00',
				'itemWeight1' => '1000',
						'itemShippingCost1' => null);
        
        $this->request->session()->put("r", $obj);
    }

    /**
     * return all products of car
     */
    public function all() {
        return \Cart::content();
    }
    
    /**
     * destroy all products at car
     */
    public function destroy(){
        \Cart::destroy();
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \App\Repositories\CartInt::remove()
     */
    public function remove($product){
    	\Cart::remove($product);
    }
    
    /**
     * 
     */
    public function total(){
    	return \Cart::total();
    }
    
    
    /**
     * 
     * @param unknown $product
     * @param unknown $value
     */
    public function updateQtd($product, $value){
    	\Cart::update($product, $value);	
    }
    
    /**
     * 
     * @param unknown $product
     */
    public function find($product){
    	return \Cart::get($product);
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \App\Repositories\CartInt::countItens()
     */
    public function countItens(){
    	return \Cart::count();
    }

}
