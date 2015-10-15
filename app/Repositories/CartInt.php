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
     * @param type $key
     */
    public function find($key);

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
     * @param type $key
     */
    public function exists($key);
}
