<?php

class ClientTableSeeder extends Seeder {
    public function run(){
        DB::table('clients')->delete();

        Client::create(array('id' => '1','nome' => 'Paula Fickel'));
        Client::create(array('id' => '2','nome' => 'Henrique'));
        Client::create(array('id' => '3','nome' => 'Liliane Araujo'));
        Client::create(array('id' => '4','nome' => 'Celso Cardoso'));
        Client::create(array('id' => '5','nome' => 'Fernanda Gervini'));
        Client::create(array('id' => '6','nome' => 'Uruguay'));
        Client::create(array('id' => '7','nome' => 'Maicon Silveira'));
        Client::create(array('id' => '8','nome' => 'Cássia'));
        Client::create(array('id' => '9','nome' => 'Tito'));
        Client::create(array('id' => '10','nome' => 'Gastal'));
        Client::create(array('id' => '11','nome' => 'Cláudio R.'));
        Client::create(array('id' => '12','nome' => 'Mano'));
        Client::create(array('id' => '13','nome' => 'Alexandre'));
        Client::create(array('id' => '14','nome' => 'Elma'));
        Client::create(array('id' => '15','nome' => 'POA Poker'));
        Client::create(array('id' => '16','nome' => 'Vi'));
        Client::create(array('id' => '17','nome' => 'Renato'));
        Client::create(array('id' => '18','nome' => 'Felipe Coelho'));
        Client::create(array('id' => '19','nome' => 'Jaque S.'));
        Client::create(array('id' => '20','nome' => 'Andressa Tabeliao'));
        Client::create(array('id' => '21','nome' => 'Tatiane Morais'));
        Client::create(array('id' => '22','nome' => 'Jussara'));
        Client::create(array('id' => '23','nome' => 'Fabiano Medeiros'));
        Client::create(array('id' => '24','nome' => 'Eliane'));
    }
}