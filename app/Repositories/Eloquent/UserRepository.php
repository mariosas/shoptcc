<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Entities\User;

/**
 * Description of UserRepository
 *
 * @author mario
 */
class UserRepository extends BaseRepository {

    public function model() {
        return User::class;
    }

}
