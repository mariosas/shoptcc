<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Entities\Review;

/**
 * Description of ReviewRepository
 *
 * @author mario
 */
class ReviewRepository extends BaseRepository implements ReviewInt {

    /**
     * 
     * @return type
     */
    public function model() {
        return Review::class;
    }

    /**
     * 
     * @param type $productID
     * @param type $comment
     * @param type $rating
     */
    public function storeReviewForProduct($productID, $comment, $rating) {
        $review = new Review();
        $review->storeReviewForProduct($productID, $comment, $rating);
    }

}
