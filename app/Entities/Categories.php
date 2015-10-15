<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of Category
 *
 * @author mario
 */
class Categories extends Model {
    protected $table = "categories";
    
    public function subcategory(){
        return $this->hasMany(SubCategory::class);
    }
}
