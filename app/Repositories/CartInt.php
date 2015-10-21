<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories;

/**
 *
 * @author mario
 */
interface CartInt {

    /**
     * 
     * @param type $id
     * @param type $qtd
     */
    public function add($id, $qtd);  

    /**
     * 
     */
    public function all();

    /**
     * 
     * @param type $key
     */
    public function destroy();

   
    /**
     * 
     * @param unknown $product
     */
    public function remove($product);
    
    /**
     * 
     * @param unknown $product
     * @param unknown $value
     */
    public function updateQtd($product, $value);
    
    /**
     *
     * @param unknown $product
     */
    public function find($product);
    
    /**
     * 
     */
    public function countItens();
}
