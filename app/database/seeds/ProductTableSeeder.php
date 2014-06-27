<?php

class ProductTableSeeder extends Seeder {
    public function run(){
        DB::table('products')->delete();

        Product::create(array(
            'descricao' => 'ORIGINAL'
        ));

        Product::create(array(
            'descricao' => 'TRIGO'
        ));
    }
}