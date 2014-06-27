<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaUsers extends Migration {

		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('users', function(Blueprint $table)
			{
				$table->increments('id');
	            $table->string('email')->unique();
	            $table->string('password');
	            $table->string('nome')->unique();
	            $table->text('remember_token')->nullable();
				$table->timestamps();
			});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema::drop('users');
		}

}