<?php

/**
 * Created by PhpStorm.
 * User: agus
 * Date: 29/07/15
 * Time: 00:37
 */
use \Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder{

    public function run(){
        \DB::table('users')->insert(
              array(
                  'name'        => 'Agustin',
                  'email'       => 'castiarena@gmail.com',
                  'password'    => \Hash::make('master')

              )
        );
    }

}