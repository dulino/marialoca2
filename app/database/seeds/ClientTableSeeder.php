<?php

class ClientTableSeeder extends Seeder {
    public function run(){
        DB::table('clients')->delete();

        Client::create(array('id' => '1','nome' => 'Paula Fickel', 'sexo' => 'F', 'email' => 'ppfborba@gmail.com'));
        Client::create(array('id' => '2','nome' => 'Henrique', 'sexo' => 'M'));
        Client::create(array('id' => '3','nome' => 'Liliane Araujo', 'sexo' => 'F', 'email' => 'lisiar@hotmail.com'));
        Client::create(array('id' => '4','nome' => 'Celso Cardoso', 'sexo' => 'M'));
        Client::create(array('id' => '5','nome' => 'Fernanda Gervini', 'sexo' => 'F'));
        Client::create(array('id' => '6','nome' => 'Uruguay', 'sexo' => 'F', 'email' => 'janavelho@ibest.com.br'));
        Client::create(array('id' => '7','nome' => 'Maicon Silveira', 'sexo' => 'M', 'email' => 'maicon_silveira16@yahoo.com.br'));
        Client::create(array('id' => '8','nome' => 'Cássia', 'sexo' => 'F', 'email' => 'cassiaalmeida_@hotmail.com'));
        Client::create(array('id' => '9','nome' => 'Tito', 'sexo' => 'M', 'email' => 'titoangelo@bol.com.br'));
        Client::create(array('id' => '10','nome' => 'Gastal', 'sexo' => 'M'));
        Client::create(array('id' => '11','nome' => 'Cláudio R.', 'sexo' => 'M'));
        Client::create(array('id' => '12','nome' => 'Mano', 'sexo' => 'M'));
        Client::create(array('id' => '13','nome' => 'Alexandre', 'sexo' => 'M'));
        Client::create(array('id' => '14','nome' => 'Elma', 'sexo' => 'F'));
        Client::create(array('id' => '15','nome' => 'POA Poker', 'sexo' => 'M', 'email' => 'poapoker@gmail.com'));
        Client::create(array('id' => '16','nome' => 'Vi', 'sexo' => 'M', 'email' => 'vinicorretorpel@gmail.com'));
        Client::create(array('id' => '17','nome' => 'Renato', 'sexo' => 'M'));
        Client::create(array('id' => '18','nome' => 'Felipe Coelho', 'sexo' => 'M'));
        Client::create(array('id' => '19','nome' => 'Jaque S.', 'sexo' => 'F'));
        Client::create(array('id' => '20','nome' => 'Andressa Tabeliao', 'sexo' => 'F'));
        Client::create(array('id' => '21','nome' => 'Tatiane Morais', 'sexo' => 'F'));
        Client::create(array('id' => '22','nome' => 'Jussara', 'sexo' => 'F'));
        Client::create(array('id' => '23','nome' => 'Fabiano Medeiros', 'sexo' => 'M', 'email' => 'fabiano.medeiros84@gmail.com'));
        Client::create(array('id' => '24','nome' => 'Eliane', 'sexo' => 'F'));
    }
}