<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Entities\Categories;

/**
 * Description of CategoryRepository
 *
 * @author mario
 */
class CategoryRepository extends BaseRepository implements CategoryInt{
    
    /**
     * 
     * @return type
     */
    public function model () {
        return Categories::class;
    }
}
