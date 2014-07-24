<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelasIniciais extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function($table)
		{
			$table->increments('id');
			$table->string('nome', 128)->unique();
			$table->string('email', 128)->unique()->nullable();
			$table->string('sexo', 1);
		});

		Schema::create('products', function($table)
		{
			$table->increments('id');
			$table->string('descricao', 128)->unique();
		});

        Schema::create('orders', function($table)
        {
            $table->increments('id');
            $table->date('dataPedido');
			$table->integer('user_id')->unsigned();
			$table->integer('client_id')->unsigned();
			$table->decimal('valor_pedido', 8, 2);
            $table->timestamps();
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('client_id')->references('id')->on('clients');
        });

        Schema::create('itemorder', function($table)
        {
            $table->increments('id');
			$table->integer('order_id')->unsigned();
			$table->integer('product_id')->unsigned();
			$table->integer('quantidade')->unsigned();
			$table->decimal('valor_unitario', 8, 2);
			$table->integer('status')->unsigned()->default('0');
            $table->timestamps();
			$table->foreign('order_id')->references('id')->on('orders');
			$table->foreign('product_id')->references('id')->on('products');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('itemorder');
        Schema::drop('orders');
        Schema::drop('products');
        Schema::drop('clients');
	}
}
