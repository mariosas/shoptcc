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
        \Cart::add($product->id, $product->name, $qtd, $product->pricing, array('icon' => $product->icon));
    }
    
    /**
     * search a product at car
     * @param type $key
     */
    public function find($key) {
        //return $this->request->session()->get($key);
    }

    /**
     * return all products of car
     */
    public function all() {
        return \Cart::content();
    }

    /**
     * delete a product of car
     * @param type $key
     */
    public function delete($key) {
        $this->request->session()->forget($key);
    }
    
    /**
     * destroy all products at car
     */
    public function destroy(){
        \Cart::destroy();
    }
    
    /**
     * verify if exists product
     * @param type $key
     */
    public function exists($key){
        if(!$this->request->session()->has($key)){
            return false;
        }
    }

    public function clear() {
        
    }

}
