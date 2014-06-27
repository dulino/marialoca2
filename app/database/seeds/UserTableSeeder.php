<?php

class UserTableSeeder extends Seeder {
    public function run(){
        DB::table('users')->delete();

        User::create(array(
            'email' => 'dulino@gmail.com',
            'password' => Hash::make('321'),
            'nome' => 'Dulino'
        ));

        User::create(array(
            'email' => 'brunofmotta@hotmail.com',
            'password' => Hash::make('bruno'),
            'nome' => 'Nei'
        ));

        User::create(array(
            'email' => 'msinoti@hotmail.com',
            'password' => Hash::make('mateus'),
            'nome' => 'Sinoti'
        ));

        User::create(array(
            'email' => 'jeanmrodrigue@hotmail.com',
            'password' => Hash::make('jean'),
            'nome' => 'Jean'
        ));
    }
}
