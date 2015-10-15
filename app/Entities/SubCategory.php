<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of SubCategory
 *
 * @author mario
 */
class SubCategory extends Model {

    protected $table = "sub_category";
    
    /**
     * 
     * @return type
     */
    public function categories() {
        return $this->belongsTo(Categories::class);
    }
    

}
