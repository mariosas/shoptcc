<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Description of Review
 *
 * @author mario
 */
class Review extends Model {

    /**
     * 
     * @return type
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * 
     * @return type
     */
    public function product() {
        return $this->belongsTo(Product::class);
    }

    /**
     * 
     * @return type
     */
    public function scopeApproved($query) {
        return $query->where('approved', true);
    }

    /**
     * 
     * @return type
     */
    public function scopeSpam($query) {
        return $query->where('spam', true);
    }

    /**
     * 
     * @return type
     */
    public function scopeNotSpam($query) {
        return $query->where('spam', false);
    }

    public function getTimeagoAttribute() {
        $date = Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
        return $date;
    }

    // this function takes in product ID, comment and the rating and attaches the review to the product by its ID, then the average rating for the product is recalculated
    public function storeReviewForProduct($productID, $comment, $rating) {
        $product = Product::find($productID);

        // this will be added when we add user's login functionality
        $this->user_id = 1;

        $this->comment = $comment;
        $this->rating = $rating;
        $product->reviews()->save($this);

        // recalculate ratings for the specified product
        $product->recalculateRating();
    }

}
