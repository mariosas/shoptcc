<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Description of Products
 *
 * @author mario
 */
class Product extends Model {

    protected $table = "products";

    /**
     * 
     * @return type
     */
    public function reviews() {
        return $this->hasMany(Review::class);
    }

    /**
     * 
     * @return type
     */
    public function categories() {
        return $this->hasMany(Categories::class);
    }
    
    /**
     * 
     * @return type
     */
    public function subcategory() {
        return $this->hasOne(SubCategory::class);
    }

    /**
     * 
     */
    public function recalculateRating() {
        $reviews = $this->reviews()->notSpam()->approved();
        $avgRating = $reviews->avg('rating');
        $this->rating_cache = round($avgRating, 1);
        $this->rating_count = $reviews->count();
        $this->save();
    }

}
