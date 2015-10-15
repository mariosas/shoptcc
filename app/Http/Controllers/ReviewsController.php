<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;
use App\Repositories\Eloquent\ReviewInt;
use Illuminate\Http\Request;

/**
 * Description of ReviewsController
 *
 * @author mario
 */
class ReviewsController extends Controller {
    
    private $repository;
    private $request;
    
    public function __construct(ReviewInt $review, Request $request) {
        $this->repository = $review;
        $this->request = $request;
    }

    public function storeReviewForProduct() {
        $product = $this->request->get('idProduct');
        $comment = $this->request->get('comment');
        $rating = $this->request->get('rating');

        $this->repository->storeReviewForProduct($product, $comment, $rating);
    }

}
