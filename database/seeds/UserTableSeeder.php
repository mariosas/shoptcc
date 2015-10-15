<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Model::unguard();

        //\App\Entities\User::truncate();
        factory(\App\Entities\User::class, 100)->create();

        Model::reguard();
    }

}
